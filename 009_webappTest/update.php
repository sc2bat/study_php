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

    function print_update(){
        ?>
        <div><a href="./write.php">WRITE</a></div>
        <div><a href="./update.php">UPDATE</a></div>
        <?php
    }

    function print_delete(){
        ?>
        <div><button id="btn_delete" type="submit">DELETE</button></div>
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

    <div>
        <form id="contentForm" action="./updatePOST.php" method="POST">
            <div>
                <input id="origin_title" name="origin_title" type="hidden" value="<?php echo $_GET['title'] ?>"/>
                <input id="title" name="title" placeholder="title" value="<?php echo $_GET['title'] ?>"/>
            </div>
            <br>
            <div>
                <textarea id="description" name="description" placeholder="description"><?php echo $_GET['description'] ?></textarea>
            </div>
            <button type="submit">UPDATE</button>
        </form>
    </div>
</body>
</html>