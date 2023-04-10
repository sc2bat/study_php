<?php require_once('./lib/print.php'); ?>
<?php require_once('./include/header.php'); ?>

    <form id="createForm" method="POST" action="./crud/create.php">
        <p><input type="text" name="title" value="" placeholder="title"></p>
        <p><textarea name="description" cols="20" rows="3" placeholder="description"></textarea></p>
    </form>
    <button type="submit" form="createForm">CREACT ACTION</button>

<?php require_once('./include/footer.php'); ?>