<?php
    rename('../data/'.$_POST['origin_title'], '../data/'.$_POST['title']);
    file_put_contents('../data/'.$_POST['title'], $_POST['description']);
    header("Location: /011_php_mysql/index.php?id=".$_POST['title']);
?>