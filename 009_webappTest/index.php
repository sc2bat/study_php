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
        if(isset($_GET['id']) && file_exists('data/'.$_GET['id'])) {
            $content = file_get_contents('data/'.$_GET['id']);
            echo $content;
        }else{
            echo 'file is not exist';
        }
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
        $folderNm = '/008_function';
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
            print_update();
        ?>
    </div>

    <?php
        print_description();
    ?>
</body>
</html>