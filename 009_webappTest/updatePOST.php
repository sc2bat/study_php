<?php
    unlink('data/'.$_POST['origin_title']);
    file_put_contents('data/'.$_POST['title'], $_POST['description']);
    header("Location: http://localhost:3000/009_webappTest/index.php?id=".$_POST['title']);
    die();
?>