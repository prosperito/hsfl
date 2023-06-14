<?php session_start();
    include "../app/database/db.php";
    
    $errMsg = '';
    $personadd = selectAll('persons');
    
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-person'])){

    $age = trim($_POST['age']);
    $educa = trim($_POST['educa']);
    $posi = trim($_POST['posi']);
    $unita = trim($_POST['unita']);
    $cath = trim($_POST['cath']);
    $rewar = trim($_POST['rewa']);
    $course = trim($_POST['course']);


    if($age === '' || $educa === ''){
        $errMsg = "Не все поля заполнены!";
    }else{
        $existence = selectOne('persons', ['age' => $age]);
        if($existence['username' === $username]){
            $errMsg = "Данные этого пользователя есть в базе!";
        }else{
            $personadd = [
                'age' => $age,
                'educa' => $educa,
                'posi' => $posi,
                'unita' => $unita,
                'cath' => $cath,
                'rewa' => $rewa,
                'course' => $course
            ];
            $id = insert('persons', $personadd);
            $personadd = selectOne('persons', ['id' => $id]);
            header('location: ../../../../dates/users-person.php');
        }    
    }
}else{
    $age = '';
    $educa = '';
    $posi = '';
    $unita = '';
    $cath = '';
    $rewa = '';
    $cours = '';
}
    // tt($_POST);
    // exit();
