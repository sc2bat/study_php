<?php
    unlink('../data/'.$_POST['id']);
    header("Location: /011_php_mysql/index.php?");
?>