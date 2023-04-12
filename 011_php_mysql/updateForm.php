<?php require_once('./lib/print.php'); ?>
<?php require_once('./include/header.php'); ?>

    <form id="updateForm" method="POST" action="./crud/update.php">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" value="<?php echo fn_print_content()[0];?>" placeholder="title"></p>
        <p>
            <textarea name="description" cols="20" rows="3" placeholder="description"><?php echo fn_print_content()[1];?></textarea>
        </p>
    </form>
    <button type="submit" form="updateForm">UPDATE ACTION</button>

<?php require_once('./include/footer.php'); ?>