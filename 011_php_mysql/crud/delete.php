
<?php
$dsn = 'mysql:dbname=phpTest;host=127.0.0.1';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sqlQuery = "DELETE FROM topic
                WHERE 1=1
                    AND id = ?
                ";
                 
$statement = $dbh->prepare($sqlQuery);

settype($_POST['id'], 'integer');
$ret = $statement->bindParam(1, $_POST['id'], PDO::PARAM_LOB);
$ret = $statement->execute();
var_Dump($ret);
if (!$statement) {
    echo "error !@!!@!";
    echo "\nPDO::errorInfo():\n";
    print_r($dbh->errorInfo());
}

$row = $statement->fetch(PDO::FETCH_ASSOC);
header("Location: /011_php_mysql/index.php");

?>