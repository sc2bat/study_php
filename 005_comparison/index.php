<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><a href="/005/index.php">WEB</a></h2>

    <ol>
        <li><a href="/005/index.php?id=HTML">HTML</a></li>
        <li><a href="/005/index.php?id=CSS">CSS</a></li>
        <li><a href="/005/index.php?id=JAVASCRIPT">JAVASCRIPT</a></li>
        <li><a href="/005/index.php?id=NODEJS">NODEJS</a></li>
        <li><a href="/005/index.php?id=PHP">PHP</a></li>
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

        if(isset($_GET['id']) && file_exists($_GET['id'])) {
            $content = file_get_contents('data/'.$_GET['id']);
            echo $content;
        }else{
            echo 'file is not exist';
        }
    ?>
</body>
</html>