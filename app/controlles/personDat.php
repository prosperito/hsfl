<?php session_start();
    
    include "../app/database/db.php";
    if (!$_SESSION['id'])
        header("Location: /");

    $errMsg = '';
    $id = '';
    $id_user = '';
    $year_birth = '';
    $edu = '';
    $edu_comment = '';
    $stag = '';
    $dolgnost = '';
    $kateg = '';
    $courses = '';
    $nagr = '';
    $persones = selectAll('person1');
    $person = selectOne('person1', ['id' => $id]);
    

   // создание данных 
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_person'])){
        
        $year_birth = trim($_POST['year_birth']);
        $edu = trim($_POST['edu']);
        $edu_comment = trim($_POST['edu_comment']);
        $stag = trim($_POST['stag']);
        $dolgnost = trim($_POST['dolgnost']);
        $kateg = trim($_POST['kateg']);
        $courses = trim($_POST['courses']);
        $nagr = trim($_POST['nagr']);
        $id_user = $person['id_user'];
             
        if($year_birth === '' || $edu === '' || $edu_comment === '' || $stag === ''){
            $errMsg = "Не все поля заполнены!";
        // }else{
        //     $existence = selectOne('person1', ['year_birdh' => $name]);
        //     if($existence['user_name'] === $user_name){
        //         $errMsg = "Такая категория в базе есть!";
            }else{
                $person = [
                    'year_birth' => $year_birth,
                    'edu' => $edu,
                    'edu_comment' => $edu_comment,
                    'stag' => $stag,
                    'dolgnost' => $dolgnost,
                    'kateg' => $kateg,
                    'courses' => $courses,
                    'nagr' => $nagr,
                    'id_user' => $_SESSION['id']
                ];
                $id = insert('person1', $person);
                $person = selectOne('person1', ['id' => $id]);
                header ('location: index-person.php');
            }
        }else{
        $year_birth = '';
        $edu = '';
        $edu_comment = '';
    }
   
    //редактирование данных
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){

        $id = $_GET['id'];
        $person = selectOne('person1',['id'=>$id]);
        $id = $person['id'];
        $year_birth = $person['year_birth'];
        $edu = $person['edu'];
        $edu_comment = $person['edu_comment'];
        $stag = $person['stag'];
        $dolgnost = $person['dolgnost'];
        $kateg = $person['kateg'];
        $courses = $person['courses'];
        $nagr = $person['nagr'];
        $id_user = $person['id_user'];
    }
 
    // обновление 
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-dates'])){

        $id = trim($_POST['id']);
        $year_birth = trim($_POST['year_birth']);
        $edu = trim($_POST['edu']);
        $edu_comment = trim($_POST['edu_comment']);
        $stag = trim($_POST['stag']);
        $dolgnost = trim($_POST['dolgnost']);
        $kateg = trim($_POST['kateg']);
        $courses = trim($_POST['courses']);
        $nagr = trim($_POST['nagr']);
  
        if($year_birth === '' || $edu === ''){
            $errMsg = "Не все поля заполнены!";
        }else{
            $person = [
                    'id_user' => $_SESSION['id'],
                    'year_birth' => $year_birth,
                    'edu' => $edu,
                    'edu_comment' => $edu_comment,
                    'stag' => $stag,
                    'dolgnost' => $dolgnost,
                    'kateg' => $kateg,
                    'courses' => $courses,
                    'nagr' => $nagr

            ];
            update('person1', $id, $person);
            $person = update('person1', ['id' => $id], $person);
            header ('location: index-person.php');
        }
    }
        //удаление критерия
        if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
            $id = $_GET['del_id'];
            delete('person1', $id);
            header ('location: edit-person.php');
        }