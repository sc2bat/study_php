<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Define-Function</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function basic33(){
            print('function print test');
            print('function print test');
        }

        basic33();
    ?>

    <h2>parameter &amp; argument</h2>
    <?php
        function sum(int $a, int $b){
            print($a + $b);
        }

        sum(2, 4);
    ?>

    <h2>return</h2>
    <?php
        function sum2($left, $right){
            return $left + $right;
        }

        $resultSum = sum2(13, 44);
        echo '<br><br>'.$resultSum;

        file_put_contents('result.txt', $resultSum);
    
    ?>

</body>
</html>