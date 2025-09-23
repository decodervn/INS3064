<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> This is my first PHP file <h1>
    <?php 
    //http://ins3064.test/day2
    $x = $_GET["x"];
    $y = $_GET["y"];
    //Arithmetic Operators: +;-,*,/
    echo "x + y = " . ($x + $y) . "<br/>";
    //others
    // Comparision operators:
    echo "x == y: " . ($x ==$y) . "<br/>";
    ?>
</body>
</html>