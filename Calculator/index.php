<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator" >
    <option>Add</option>
    <option>Subtract</option>
    <option>Multiply</option>
    <option>Divide<option>
    </select>
    <button type="submit" name="submit" value="Submit">Calculate</button>
    <br>

    <p>The Value is:</p>

    <?php
    if(isset($_GET['submit'])){
        $result1=$_GET["num1"];
        $result2=$_GET["num2"];
        $operator=$_GET["operator"];

        switch($operator){
            case "Add":
                echo $result1 + $result2 ;
                break;
            case "Subtract":
                echo $result1 - $result2 ;
                break;
            case "Multiply":
                echo $result1 * $result2 ;
                break;
            case "Divide":
                echo $result1 / $result2 ;
                break;    
        }

    }




    ?>


    </form>


</body>
</html>