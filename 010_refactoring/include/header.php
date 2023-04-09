<?php require_once('./lib/print.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo fn_print_content()[0]; ?></title>
</head>
<body>
    <h2><a href="index.php">WEB</a></h2>
    
    <?php echo fn_print_list(); ?>