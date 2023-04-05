<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php

        $dataList = array('html', 'css', 'javascript', 'php');

        for($i = 0; $i < count($dataList); $i++){
            echo $dataList[$i];
            echo '<br>';
        }

        var_dump(count($dataList));
        array_push($dataList, 'nodejs');
        var_dump($dataList);
    ?>
</body>
</html>