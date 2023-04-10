<?php
    function fn_print_content(){
        $array_content = [];
        $title = "";
        $description = "";
        if(isset($_GET['id'])){
            $title = $_GET['id'];
            $description = file_get_contents('./data/'.$_GET['id']);    
        }else{
            $title = "Welcome";
            $description = null;    
        }
        array_push($array_content, $title, $description);
        return $array_content;
    }
    
    function fn_print_list(){
        $list_dir = scandir('./data');
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
    }

?>