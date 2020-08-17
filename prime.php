<?php

/*

Q write a program to print prime number upto 100;

*/


echo "<br><br>This is under 100 no prime is : <br>";

$count = 0 ;
$number = 2 ;
while ($count < 25 )
{
$div_count=0;
for ( $i=1;$i<=$number;$i++)
{
if (($number%$i)==0)
{
$div_count++;
}
}
if ($div_count<3)
{
echo $number." , ";
$count=$count+1;
}
$number=$number+1;
}


echo "<br><br>";

?>
<form method="post">
Enter a Number: <input type="text" name="input"><br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
if($_POST)
{
    $input=$_POST['input'];
    for ($i = 2; $i <= $input-1; $i++) {
      if ($input % $i == 0) {
      $value= True;
      }
}
if (isset($value) && $value) {
     echo 'The Number '. $input . ' is not prime';
}  else {
   echo 'The Number '. $input . ' is prime';
   }
}


?>