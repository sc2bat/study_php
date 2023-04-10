<?php
// PDO
/*
$pdo = new PDO('mysql:host=example.com;dbname=database', 'user', 'password');
$statement = $pdo->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo htmlentities($row['_message']);
 */
?>

<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=phpTest;host=127.0.0.1';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sqlQuery = "INSERT INTO topic(title, description, reg_date) VALUES('MySQL', 'MySQL is ...', NOW())";
$statement = $dbh->query($sqlQuery);
if (!$statement) {
    echo "\nPDO::errorInfo():\n";
    print_r($dbh->errorInfo());
}
$row = $statement->fetch(PDO::FETCH_ASSOC);


?>