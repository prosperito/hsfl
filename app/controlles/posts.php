<?php session_start();
    
    include "../app/database/db.php";

    $errMsg = '';

    
    $id = '';
    $title = '';
    $content = '';
    $img = '';
    $crit = '';

    $critos = selectAll('crit');
    $posts = selectAll('posts');

   // создание записи
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])){
// tt($_FILES);
// exit();
        if (!empty($_FILES)){
            $name = $_FILES['img']['name'];
            $tmp_name = $_FILES['img']['tmp_name'];
            move_uploaded_file($tmp_name, "img/" . $name);
        }

        $title = trim($_POST['title']);
        $content = trim($_POST['content']);
        $crit = trim($_POST['crit']);
        
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
                    'id_crit' => (int)$crit
                ];
                $post= insert('posts', $post);
                $post = selectOne('posts', ['id' => $id]);
                header ('location: edit-post.php');
            }
    }else{
        $title = '';
        $content = '';
        $img = '';
        $id_crit = '';
     }
   
//редактирование записи
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){

    $id = $_GET['id'];
    $post = selectOne('posts',['id'=>$id]);
    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
}

// обновление записи
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit-post'])){
// tt($_POST);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
 
    if($title === '' || $content === ''){
        $errMsg = "Не все поля заполнены!";
    }else{
        $posts = [
                'title' => $title,
                'content' => $content,
        ];
        $id = $_POST['id'];
        $posts_id = update('posts', $id, $posts);
        header ('location: edit-post.php');
    }
}
    //удаление записи
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])){
        $id = $_GET['del_id'];
        delete('posts', $id);
        header ('location: edit-post.php');
    }
