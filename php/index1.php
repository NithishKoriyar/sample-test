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
        require_once './Person.php';
        require_once './Student.php';

        $s = new Student("Zura",'28',1234);
        echo $s->name.'<br>';
        ?>
</body>
</html>