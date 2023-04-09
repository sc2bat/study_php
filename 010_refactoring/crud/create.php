<?php
    file_put_contents('../data/'.$_POST['title'], $_POST['description']);
    header("Location: /010_refactoring/index.php?id=".$_POST['title']);
?>