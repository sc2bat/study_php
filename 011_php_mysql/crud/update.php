
<?php
$dsn = 'mysql:dbname=phpTest;host=127.0.0.1';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sqlQuery = "UPDATE topic
                SET
                    title = ?
                    , description = ?
                WHERE 1=1
                    AND id = ?
                ";
                 
$statement = $dbh->prepare($sqlQuery);

$ret = $statement->bindParam(1, $_POST['title'], PDO::PARAM_LOB);
$ret = $statement->bindParam(2, $_POST['description'], PDO::PARAM_LOB);

settype($_POST['id'], 'integer');
$ret = $statement->bindParam(3, $_POST['id'], PDO::PARAM_LOB);
$ret = $statement->execute();
var_Dump($ret);
if (!$statement) {
    echo "error !@!!@!";
    echo "\nPDO::errorInfo():\n";
    print_r($dbh->errorInfo());
}

$row = $statement->fetch(PDO::FETCH_ASSOC);
//header("Location: /011_php_mysql/index.php?id=".$_POST['title']);
header("Location: /011_php_mysql/index.php?id".$_POST['id']);

?>