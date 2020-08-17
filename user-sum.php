<?php

// $num1 = $num2 = $sum = "";
// find the input box with @ symbol ...      (ex ..    <?php  echo @ num1 ; ...)

/*
when no got any value of input box using php code then solve warning is two type (first is varraible define first is blank after isset
value so done value not get any error / second is using varriable with @ symbol where using php code inside input box in php code not
 get any error because @solve any error or warning in your input box.)

*/

// $num1 = $num2 = $sum = "";

if(isset($_POST['sub']))
{
    $num1 = $_POST['no1'];
    $num2 = $_POST['no2'];
    $sum = $num1 + $num2;
    echo "Your Addition is successfully solved.";
}

?>

<html>
    <head>
        <title> Sum of No </title>
    </head>
    <body>
        <form method="post">
            Enter Number Find table : <input type="text" name="no1" value="<?php echo @$num1; ?>" required>
            <br>
            Enter Second Number : <input type="text" name="no2" value="<?php echo @$num2; ?>" required>
            <br>
            Result is After sum Two Numbers is : <input type="text" name="sum" value="<?php echo @$sum; ?>" readonly>
            <br><br>
            <input type="submit" name="sub" value="submit">
        </form>
    </body>
</html>

