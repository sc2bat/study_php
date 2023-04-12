
<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=phpTest;host=127.0.0.1';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sqlQuery = "INSERT INTO topic(title, description, reg_date)
                 VALUES(?, ?, NOW())";
                 
$statement = $dbh->prepare($sqlQuery);

// $filtered_array = array(
//     'title'=>$dbh->quote($_POST['title'])
//     , 'description'=>$dbh->quote($_POST['description'])
// );
// $ret = $statement->bindParam(1, $filtered_array['title'], PDO::PARAM_LOB);
// $ret = $statement->bindParam(2, $filtered_array['description'], PDO::PARAM_LOB);
$ret = $statement->bindParam(1, $_POST['title'], PDO::PARAM_LOB);
$ret = $statement->bindParam(2, $_POST['description'], PDO::PARAM_LOB);
$ret = $statement->execute();
var_Dump($ret);
if (!$statement) {
    echo "error !@!!@!";
    echo "\nPDO::errorInfo():\n";
    print_r($dbh->errorInfo());
}

$row = $statement->fetch(PDO::FETCH_ASSOC);
//header("Location: /011_php_mysql/index.php?id=".$_POST['title']);
header("Location: /011_php_mysql/index.php?");

?>