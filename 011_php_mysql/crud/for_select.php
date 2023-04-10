<?php

// var_dump($a = 1004);
// echo $a;

$dsn = 'mysql:dbname=phpTest;host=127.0.0.1';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$sqlQuery = "SELECT * FROM topic
                WHERE 1=1
                ORDER BY id DESC";
$statement = $dbh->prepare($sqlQuery);
$ret = $statement->execute();
//var_Dump($ret);
if (!$statement) {
    echo "error !@!!@!";
    echo "<br>PDO::errorInfo():<br>";
    print_r($dbh->errorInfo());
}

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
$list_ol = "<ol>\n";
for($i = 0; $i < count($rows); $i++){
    $list_ol .= "<li><a href=\"index.php?id=".$rows[$i]['id']."\">".$rows[$i]['title']."</a></li>\n";
}
$list_ol .= "</ol>\n";
echo $list_ol;
//print_r($rows);

/**
 $list_ol = "<div>test</div>";
        if(3 < count($list_dir)){
            $list_ol = "<ol>\n";
            for($i = 0; $i < count($list_dir); $i++){
                if($list_dir[$i] != '.' && $list_dir[$i] != '..'){
                    $list_ol .= "<li><a href=\"index.php?id=".$list_dir[$i]."\">".$list_dir[$i]."</a></li>\n";
                }
            }
            $list_ol .= "</ol>\n";
        }
        return $list_ol;
*/

?>