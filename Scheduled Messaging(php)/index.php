<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
$dateofday=date("w");
//echo $dateofday;

switch($dateofday){
    case 1:
        echo "It is Saturday";
        break;
    case 2:
        echo "It is Sunday";
        break;
    case 3:
        echo "It is Monday";
        break;
    case 4:
        echo "It is Tuesday";
        break;
    case 5:
        echo "It is Wednesday";
        break;
    case 6:
        echo "It is Thursday";
        break;
    case 7:
        echo "It is Friday";
        break;
}


?>
</body>
</html>