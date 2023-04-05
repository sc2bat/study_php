<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $folderNm = '/006';
    ?>
    <h2><a href="<?php echo $folderNm;?>/index.php">WEB</a></h2>

    <ol>
        <?php
            $list = scandir('data');
            for($i = 0; $i < count($list); $i++){
                if($list[$i] != '.' && $list[$i] != '..'){
                    ?>
                    <li><a href="<?=$folderNm?>/index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                    <?php
                }
            }
        ?>
    </ol>
    <h2>
        <?php
            if(isset($_GET['id'])) {
                echo $_GET['id'];
            }else{
                echo 'id is not set';
            }
        ?>
    </h2>

    <?php
        echo "data/id 값에 해당하는 파일의 내용";
        echo '<br>';
        echo '<br>';

        if(isset($_GET['id']) && file_exists('data/'.$_GET['id'])) {
            $content = file_get_contents('data/'.$_GET['id']);
            echo $content;
        }else{
            echo 'file is not exist';
        }
    ?>
</body>
</html>