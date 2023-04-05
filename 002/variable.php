<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Variable</h1>
    <?php
        $a = 1;
        $b = 2;

        echo $a + $b;
    ?>
    <br>
    <br>
    <?php
        $name = 'blockchain';
        $nftContent = 'NFT(Non-fungible token, 대체 불가능 토큰)란 '.$name.'블록체인 기술을 이용해서 디지털 자산의 소유주를 증명하는 가상의 토큰(token)이다.'.$name.' 그림·영상 등의 디지털 파일을 가리키는 주소를 토큰 안에 담음으로써 그 고유한 원본성 및 소유권을 나타내는 용도로 사용된다. '.$name.'즉, 일종의 가상 진품 증명서.
        대체불가능한 토큰은 고유성을 지니며, '.$name.'동일품이 존재할 수 없는 주민등록증과 비슷하다. NFT는 거래내역을 블록체인에 영구적으로 남김으로써 그 고유성을 보장받는다.';

        echo $nftContent;
    ?>
</body>
</html>