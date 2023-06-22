<?php session_start();
    
    include "../app/database/db.php";
    $_SESSION['id'] = $existence['id'];
    $_SESSION['username'] = $existence['username'];
    $_SESSION['admin'] = $existence['admin'];
    $_SESSION['id_mo'] = $existence['id_mo'];
    $errMsg = '';

    
    $id = '';
    $title = '';
    $content = '';
    $img = '';
    $crit = '';
    $mo = '';

    $critos = selectAll('crit');
    $posts = selectAll('posts');
    $cat1post = selectAll('cat1');
    $cat2post = selectAll('cat2');
    $cat3post = selectAll('cat3');
    $cat4post = selectAll('cat4');
 
   // создание записи
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])){
        // tt($_POST);
        if (!empty($_FILES)){
            $name = time() . '_' .$_FILES['img']['name'];
            $tmp_name = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_name, "../assets/img/" . $name);
            $img = $name;
        }

        $title = trim($_POST['title']);
        $content = trim($_POST['content']);
        $crit = trim($_POST['crit']);
        $publish = trim($_POST['publish']) !== null ? 1 : 0;
        $mo = trim($_POST['mo']);
        $cat = trim($_POST['id_cat']);
        if($title === '' || $content === ''){
            $errMsg = "Не все поля заполнены!";

        }else{
              $post = [
                    'id_user' => (int)$_SESSION['id'],
                    'title' => $title,
                    'content' => $content,
                    'img' => $img,
                    'status' => 1,
                    'id_cat' => $cat,
                    'id_crit' => $crit,
                    'id_mo' => (int)$_SESSION['id_mo']
                ];

                $post= insert('posts', $post);
                $post = selectOne('posts', ['id' => $id]);
                header ('location: edit-post.php');
            }
    }else{
        $id = '';
        $title = '';
        $content = '';
        $img = '';
        $id_crit = '';
        $publish = '';
        $cat1 = '';
        $mo = '';
     }
   
//редактирование записи
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){

    $selectOnePostById = selectOne('posts',['id' => $_GET['id']]);
    $nomerMo = selectOne('user',['id' => $_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
    $crit1 = $post['id_crit'];
    $publish = $post['status'];

//    tt($_POST);
}else{
    $id = '';
    $title = '';
    $content = '';
    $img = '';
    $crit1 = '';
    $publish = '';
 
}

// обновление записи
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-post'])){
        $id = $_POST['id'];
        
        $title = trim($_POST['title']);
        $content = trim($_POST['content']);
        $crit1 = trim($_POST['crit']);
        $publish = trim($_POST['publish']) !== null ? 1 : 0;
  
        if($title === '' || $content === '' || $crit = ''){
            $errMsg = "Не все поля заполнены!";

        }else{
                $post = [
                    'id_user' => $_SESSION['id'],
                    'title' => $title,
                    'content' => $content,
                    'img' => $img,
                    'status' => 1,
                    'id_crit' => (int)$crit1
                ];

                $post= update('posts', $id, $post);
                $post = selectOne('posts', ['id' => $id]);
                header ('location: edit-post.php');
        }
    }else{
        $id = '';
        $title = $_POST['title'];
        $content = $_POST['content'];
        $id_crit = '';
        $publish = isset($_POST['publish']) ? 1 : 0; //проверяем отмечен чек бокс или нет
        $crit1 = $_POCT['id_crit'];
     }
    

    //удаление записи
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
        $id = $_GET['del_id'];
        delete('posts', $id);
        header ('location: edit-post.php');
    }
