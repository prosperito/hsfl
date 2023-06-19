<?php session_start();
    
    include "../app/database/db.php";

    $errMsg = '';
    $id = '';
    $name = '';
    $descript = '';
    $critos = selectAll('crit');


   // создание критерия 
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['crits'])){

        $name = trim($_POST['name']);
        $descript = trim($_POST['descript']);
     
        if($name === '' || $descript === ''){
            $errMsg = "Не все поля заполнены!";
        }else{
            $existence = selectOne('crit', ['name' => $name]);
            if($existence['name'] === $name){
                $errMsg = "Такая категория в базе есть!";
            }else{
                $crits = [
                    'name' => $name,
                    'descript' => $descript,
                ];
                $id = insert('crit', $crits);
                $crits = selectOne('crit', ['id' => $id]);
                header ('location: edit-crit.php');
            }
        }
    }else{
        $name = '';
        $descript = '';
    }
   
    //редактирование критерия
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){

        $id = $_GET['id'];
        $crits = selectOne('crit',['id'=>$id]);
        $id = $crits['id'];
        $name = $crits['name'];
        $descript = $crits['descript'];
    }
 
    // обновление критерия 
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-crit'])){
// tt($_POST);
        $name = trim($_POST['name']);
        $descript = trim($_POST['descript']);
     
        if($name === '' || $descript === ''){
            $errMsg = "Не все поля заполнены!";
        }else{
            $crits = [
                    'name' => $name,
                    'descript' => $descript,
            ];
            $id = $_POST['id'];
            $crits_id = update('crit', $id, $crits);
            header ('location: edit-crit.php');
        }
    }
        //удаление критерия
        if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
            $id = $_GET['del_id'];
            delete('crit', $id);
            header ('location: edit-crit.php');
        }