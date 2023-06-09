<?php
    function print_title(){
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        }else{
            echo 'welcome php';
        }
    }

    function print_list($folderNm){
        $list = scandir('data');
        for($i = 0; $i < count($list); $i++){
            if($list[$i] != '.' && $list[$i] != '..'){
                ?>
                <li><a href="<?=$folderNm?>/index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                <?php
            }
        }
    }

    function print_description(){
        $resultDescription = "";
        if(isset($_GET['id']) && file_exists('data/'.$_GET['id'])) {
            $resultDescription = file_get_contents('data/'.$_GET['id']);
        }else{
            $resultDescription = "file is not exist";
        }
        return $resultDescription;
    }

    function print_write(){
        ?>
        <div><a href="./writeForm.php">WRITE</a></div>
        <?php
    }
    function print_update($title, $description){
        ?>
        <div><a href="./update.php?title=<?php echo $title ?>&description=<?php echo $description ?>">UPDATE</a></div>
        <?php
    }

    function print_delete(){
        ?>
        <form id="deleteForm" action="./delete.php" method="POST">
            <div>
                <input id="title" name="title" type="hidden" value="<?php echo $_GET['id'] ?>"/>
            </div>
            <div><button id="btn_delete" type="submit">DELETE</button></div>
        </form>
        <?php
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            print_title();
        ?>
    </title>
</head>
<body>
    <?php 
        $folderNm = '/009_webappTest';
    ?>
    <h2><a href="<?php echo $folderNm;?>/index.php">WEB</a></h2>

    <ol>
        <?php
            print_list($folderNm);
        ?>
    </ol>
    <h2>
        <?php
            print_title();
        ?>
    </h2>

    <div id="update">
        <?php
            print_write();
            
            if(isset($_GET['id'])) {
                print_update($_GET['id'], print_description());
                print_delete();
            }
        ?>
    </div>

    <?php
        echo print_description();
    ?>
<!--
    <div>
        <form id="contentForm" action="./write.php" method="POST">
            <div>
                <input id="title" name="title" placeholder="title"/>
            </div>
            <br>
            <div>
                <textarea id="description" name="description" placeholder="description"></textarea>
            </div>
            <button type="submit">WRITE</button>
        </form>
    </div>-->
</body>
</html>