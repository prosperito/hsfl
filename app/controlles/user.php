<?php

include "app/database/db.php";

$errMsg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
 
    $admin = 0;
    $username = trim($_POST['username']);
    $family = trim($_POST['family']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    
    if($username === '' || $ufamily === '' || $pass === ''){
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
            $post = [
            'admin' => $admin,
            'username' => $username,
            'family' => $family,
            'password' => $pass
        ];
        $id = insert('user', $post);
        $user = selectOne('user', ['id' => $id]);
  
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['family'] = $user['family'];
        $_SESSION['admin'] = $user['admin'];

        if($_SESSION['admin']){
            header('location: /admin/admin.php');
        }
        header('location: /dates/index-user.php');
        }
    }
}else{
    $username = '';
    $family = '';
    $login = '';


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

            if ($_SESSION['admin']){
                header('location: /admin/admin.php');
            }else{
                header('location: /dates/index-user.php');
            }
        }else{
            echo "Имя или пароль неверны!";
        }
    }
}else{
    $username = '';
}

// tt($_POST);
// exit();  