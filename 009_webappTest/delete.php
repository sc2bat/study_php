<?php
    unlink('data/'.$_POST['title']);
    header("Location: http://localhost:3000/009_webappTest/index.php");
    die();
?>