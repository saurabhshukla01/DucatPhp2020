<?php
echo "<strong>";

// how to create password using function :

//  md5() ==>  convert the data in 32 char hexadecimal (using create password in website using md5() )  .

$str="hello";
echo "After convert data in hexadecimal 32 using str value change so ====== ".md5($str);
echo "<br>";

//  sha1() ==>  convert the data in 40 char hexadecimal (using create password in website using sha1() )  .

$str="hello";
echo "After convert data in hexadecimal 40 using str value change so ====== ".sha1($str);

echo "<br>";



//  Data is  encrypt and decrypt function  :

$data = "Hello";
$enc = convert_uuencode($data);
echo "Encrypt data is ====== ".$enc;

echo "<br>";

$dec = convert_uudecode($enc);
echo "Decrypt data is ====== ".$dec;


echo "</strong>";
?>
