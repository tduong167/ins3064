<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $x = $_GET["x"];
    $y = $_GET["y"];
    echo "x + y =". ($x + $y) . "<br/";
    echo "x == y". ($x == $y) . "<br/>";
    echo "x != y:". ($x != $y) . "<br/>";
    echo "x < y:". ($x < $y) . "<br/>";
    echo "x > y:". ($x > $y) . "<br/>";
    echo "x <= y:". ($x <= $y) . "<br/>";
    echo "x >= y:". ($x >= $y) ."<br/>";
    ?>
</body>
</html>