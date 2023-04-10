<?php
$dsn = 'mysql:dbname=phpTest;host=127.0.0.1';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sqlQuery = "SELECT * FROM topic
                WHERE 1=1
                ORDER BY id DESC";
$statement = $dbh->prepare($sqlQuery);
$ret = $statement->execute();
var_Dump($ret);
if (!$statement) {
    echo "error !@!!@!";
    echo "<br>PDO::errorInfo():<br>";
    print_r($dbh->errorInfo());
}

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($rows);
print_r($rows);

/**
 * 
 foreach ($rows as $key=> $row) {
     echo '<br><br> key ==> '.$key;
     echo '<br> id ==> '.$row['id'];
     echo '<br> title ==> '.$row['title'];
     echo '<br> description ==> '.$row['description'];
     echo '<br> reg_date ==> '.$row['reg_date'];
     echo '==============================================';
    }
*/
    //header("Location: /011_php_mysql/index.php?");
?>