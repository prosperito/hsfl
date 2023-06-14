<?php session_start();
    
    include "../app/database/db.php";

    $errMsg = '';
    $id = '';
    $name = '';
    $descript = '';
    $critos = selectAll('crit');

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['crits'])){

        $name = trim($_POST['name']);
        $descript = trim($_POST['descript']);
                
        if($name === '' || $descript === ''){
            $errMsg = "Не все поля заполнены!";
        }else{
            $existence = selectOne('crit', ['name' => $name]);
            if($existence['name' === $name]){
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


   
    //редактирование категории
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
        $id = $_GET['id'];
        $critos = selectOne('crit',['id'=>$id]);
        $id = $critos['id'];
        $name = $critos['name'];
        $descript = $critos['descript'];
    }
 