<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- http://localhost:3000/003/parameter.php?name=test&email=test@test.com -->
    <div>Hello</div>    
    <div>name : <?php echo $_GET['name']; ?></div>
    <div>email : <?php echo $_GET['email']; ?></div>
</body>
</html>