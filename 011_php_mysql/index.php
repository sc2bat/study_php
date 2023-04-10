<?php require_once('./lib/print.php'); ?>
<?php require_once('./include/header.php'); ?>

    <a href="createForm.php">CREATE FORM</a>
<?php
    if(isset($_GET['id'])){
?>
        <a href="updateForm.php?id=<?=$_GET['id']?>">UPDATE FORM</a>
        <form id="deleteForm" method="POST" action="./crud/delete.php">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <button type="submit" form="deleteForm">DELETE</button>
        </form>
        <br>
        <br>
        <h2><?php echo fn_print_content()[0];?></h2>
        <div><?php echo fn_print_content()[1];?></div>
<?php
    }
?>

<?php require_once('./include/footer.php'); ?>