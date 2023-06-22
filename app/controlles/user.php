<?php

include "app/database/db.php";

$errMsg = '';
$MO = selectAll('MO');
$User = selectAll('user');

function userAuth($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['id_mo'] = $user['id_mo'];
    if($_SESSION['admin']){
        header('location: /admin/admin.php');
    }else{
        header('location: /dates/index-user.php');
    }
 
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $admin = 0;
    $username = trim($_POST['username']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    $mo = trim($_POST['MO']);

    if($username === ''|| $pass === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($username, 'UTF8') <2){
        $errMsg = "Введите полное имя";
    }elseif ($passF !== $passS){
        $errMsg = "Пароли не совпадают!";
    }else{
        $existence = selectOne('user', ['username' => $username]);
        if($existence['username' === $username]){
            $errMsg = "Пользователь с таким именем уже зарегистрирован";
        }else{
            $pass = password_hash($passF, PASSWORD_DEFAULT);
            $user = [
                'admin' => $admin,
                'username' => $username,
                'id_mo' => $mo,
                'password' => $pass,

            ];

    
        $id = insert('user', $user);
        // $user = selectOne('user', ['id' => $id]);
        

        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['mo'] = $user['id_mo'];

        if($_SESSION['admin']){
            header('Location: /admin/admin.php');
        }else{
        header('Location: /');
        
        }
    }
}   
}else{
    $username = '';
    $login = '';
    $mo = '';

}
//  код для формы авторизации

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
 
    $username = trim($_POST['username']);
    $pass = trim($_POST['password']);

    if($username === '' ||$pass === ''){
        $errMsg = "Не все поля заполнены!";
    }else{
        $existence = selectOne('user', ['username' => $username]);
        if($existence && password_verify($pass, $existence['password'])){
         
            $_SESSION['id'] = $existence['id'];
            $_SESSION['username'] = $existence['username'];
            $_SESSION['admin'] = $existence['admin'];
            $_SESSION['id_mo'] = $existence['id_mo'];

            // if ($_SESSION['admin']){
            //     header('Location: /admin/admin.php');
            // }else{
            //     header('Location: /dates/index-user.php');
            // }
        }else{
            echo "Имя или пароль неверны!";
        }
    }
}else{
    $username = '';
}
?>
