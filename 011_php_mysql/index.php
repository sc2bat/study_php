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

<br>
<br>
<?php
// Get the client's IP address
$client_ip = $_SERVER['REMOTE_ADDR'];
echo 'client ip ==> '.$client_ip; 
// Execute the arp command and store the output in $output
exec("arp -a $client_ip", $output);

// The MAC address should be the second element in the array
$mac_address = $output[1];

// Print the MAC address
echo "The MAC address for $client_ip is $mac_address";

?>
<br>
<br>



<?php require_once('./include/footer.php'); ?>