<?php

    function fn_db_conn(){
        $dsn = 'mysql:dbname=phpTest;host=127.0.0.1';
        $user = 'root';
        $password = 'root';
        $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        return $dbh;
    }
    
    function fn_print_content(){
        $array_content = [];
        
        if(isset($_GET['id'])){
            $dbconn = fn_db_conn();
            $sqlQuery = "SELECT * FROM topic
                            WHERE 1=1
                                AND id = ?";
            $statement = $dbconn->prepare($sqlQuery);
            //$filtere_id = $dbconn->quote($_GET['id']);
            //echo '$filtere_id --> '.$filtere_id;
            $ret = $statement->bindParam(1, $_GET['id'], PDO::PARAM_LOB);
            $ret = $statement->execute();
            if (!$statement) {
                echo "error !@!!@!";
                echo "<br>PDO::errorInfo():<br>";
                print_r($dbconn->errorInfo());
            }
            
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            array_push($array_content, htmlspecialchars($row['title']), htmlspecialchars($row['description']));
        }else{
            array_push($array_content, 'WELCOME', 'php - mysql');
        }
        //print_r($row);
        return $array_content;
    }
    
    function fn_print_list(){
        $dbconn = fn_db_conn();
        $sqlQuery = "SELECT * FROM topic
                        WHERE 1=1
                        ORDER BY id DESC";
        $statement = $dbconn->prepare($sqlQuery);
        $ret = $statement->execute();
        //var_Dump($ret);
        if (!$statement) {
            echo "error !@!!@!";
            echo "<br>PDO::errorInfo():<br>";
            print_r($dbconn->errorInfo());
        }
        
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        $list_ol = "<ol>\n";
        
        for($i = 0; $i < count($rows); $i++){
            $list_ol .= "<li><a href=\"index.php?id=".$rows[$i]['id']."\">".htmlspecialchars($rows[$i]['title'])."</a></li>\n";
        }
        $list_ol .= "</ol>\n";
        return $list_ol;
    }


?>