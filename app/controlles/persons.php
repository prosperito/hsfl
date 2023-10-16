<?php
require "../app/database/db.php";
if (!$_SESSION['id'])
    header("Location: /");
// $_SESSION['id'] = $existence['id'];
// $_SESSION['username'] = $existence['username'];
// $_SESSION['admin'] = $existence['admin'];
// $_SESSION['id_mo'] = $existence['id_mo'];
$errMsg = '';


$id = '';
$title = '';
$content = '';
$mo = '';

$person = selectAll('person');
$addpers = selectAll('pers');
$MO = selectAll('MO');
// $postAdm = selectAllFromPostsWithUser('posts','user');
//tt($postAdm);


// создание записи
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_post'])) {
    // tt($_POST);
    // if (!empty($_FILES)) {
    //     $name = time() . '_' . $_FILES['img']['name'];
    //     $tmp_name = $_FILES['img']['tmp_name'];
    //     move_uploaded_file($tmp_name, "../assets/img/" . $name);
    //     $img = $name;
    // }

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $pers = trim($_POST['pers']);
    // $publish = trim($_POST['publish']) !== null ? 1 : 0;
    $mo = trim($_POST['mo']);
    $pers = trim($_POST['id_pers']);
    if ($title === '' || $content === '') {
        $errMsg = "Не все поля заполнены!";

    } else {
        $pers = [
            'id_user' => (int) $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            // 'img' => $img,
            // 'status' => 1,
            'id_pers' => $pers,
            'id_mo' => (int) $_SESSION['id_mo']
        ];

        $person = insert('person', $person);
        $post = selectOne('person', ['id' => $id]);
        header('location: add-person-date.php');
    }
} else {
    $id = '';
    $title = '';
    $content = '';
    $id_pers = '';
    // $publish = '';
    $mo = '';
}

//редактирование записи
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {

    $selectOnePersonById = selectOne('person', ['id' => $_GET['id']]);
    $nomerMo = selectOne('user', ['id' => $_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];
    $content = $post['content'];
    $pers = $post['id_pers'];
    // $publish = $post['status'];

    //    tt($_POST);
} else {
    $id = '';
    $title = '';
    $content = '';
    $pers = '';
    // $publish = '';
}

// обновление записи
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit'])) {
    $id = $_POST['id'];

    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $ball = trim($_POST['ball']);
    $crit = trim($_POST['crit']);
    // $publish = trim($_POST['publish']) !== null ? 1 : 0;

    if ($title === '' || $content === '' || $crit === '') {
        $errMsg = "Не все поля заполнены!";

    } else {
        $post = [
            'id_user' => $_SESSION['id'],
            'title' => $title,
            'content' => $content,
            'ball' => (int)$ball,
            // 'img' => $img,
            // 'status' => 1,
            'id_crit' => (int) $crit1
        ];

        update('posts', $id, $post);
        $post = selectOne('posts', ['id' => $id]);
        header('location: edit.php');
    }
} else {
    $id = '';
    $title = $_POST['title'];
    $content = $_POST['content'];
    $ball = $_POST['ball'];
    $id_crit = '';
    // $publish = isset($_POST['publish']) ? 1 : 0; //проверяем отмечен чек бокс или нет
    $crit1 = $_POST['id_crit'];
}

//удаление записи
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    deleteF('posts', $id);
    header('location: edit.php');
}

//поиск по заголовкам и содержимому
function searchInNameUser($text, $table1, $table2){
    $text = trim(strip_tags(stripcslashes(htmlspecialchars($text))));
    global $pdo;
    $sql = "SELECT
    p.*, u.username
    FROM $table1 AS p
    JOIN $table2 AS u
    ON p.id_user = u.id
    WHERE u.username LIKE '%$text%'";
    
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}


