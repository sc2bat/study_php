<?php
    file_put_contents('../data/'.$_POST['title'], $_POST['description']);
    header("Location: /011_php_mysql/index.php?id=".$_POST['title']);
?>