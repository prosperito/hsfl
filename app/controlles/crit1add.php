<?php session_start();
    include "../app/database/db.php";

    $errMsg = '';
    $crit = selectAll('posts');
 

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['post-create'])){
    $crit_cat = trim($_POST['crit_cat']);
    $name = trim($_POST['name']);
    $descript = trim($_POST['descript']);
    
    if($name === '' || $description === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($name, 'UTF8') <2){
        $errMsg = "Название достижения должно быть больше 2 символов";
    }else{
        $existence = selectOne('criteria', ['name' => $name]);
        if($existence['name' === $name]){
            $errMsg = "Такой критерий в базе есть!";
        }else{
            $posts = [
            'name' => $name,
            'description' => $description,
            'crit_cat' => $crit_cat
        ];
        $id = insert('posts', $crit_cat);
        $crit_cat = selectOne('posts', ['id' => $id]);
        header('location: /dates/index-user.php');
        }    
    }
}
tt($_POST);
exit();
