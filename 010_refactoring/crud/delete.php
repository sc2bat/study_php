<?php
    unlink('../data/'.$_POST['id']);
    header("Location: /010_refactoring/index.php?");
?>