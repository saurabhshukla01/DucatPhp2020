<?php
echo "<h4>";

// string print in upper case :
$str = "hello dear how are you ?";
echo strtoupper($str);

echo "<br>";

// string print in lower case :
$str = "HEllo dear HOw Are YOu ?";
echo strtolower($str);

echo "<br>";

// string print in only first charcter in single string case :
$str = "hello dear how are you ?";
echo ucfirst($str);

echo "<br>";

// string print in all words first charcter is capitilaze case :
$str = "hello dear how are you ?";
echo ucwords($str);

echo "<br>";

// string print in string length is what case :

$str = "hello dear how are you ?";
echo strlen($str);

echo "<br>";

// string print in suffle random string print all time when user refresh the browser case :

$str = "hello dear how are you ?";
echo "<b>print all time random string all charcter is same string not another but shuffle all times using capcha code is project : </b><br>";
echo str_shuffle($str);
echo "<br>";
echo str_shuffle($str);
echo "<br>";
echo str_shuffle($str);

echo "<br>=======================<br>";

// string print in trim (remove uneccessary white space in given string ) case :

$str = "    hello dear how are you ?    ";
echo "remove Uncessary white space then string is : ".trim($str);
echo "<br>";
echo strlen(trim($str));

echo "<br>";

// string print in ltrim (remove white space left side in given string ) case :

$str = "    hello dear how are you ?     ";
echo "remove white space left side then string is : ".ltrim($str);
echo "<br>";
echo strlen(ltrim($str));

echo "<br>";

// string print in rtrim (remove white space right side in given string ) case :

$str = "       hello dear how are you ?    ";
echo "remove white space right side then string is : ".rtrim($str);
echo "<br>";
echo strlen(rtrim($str));


echo "<br>";
//  print reverse string of given string :

$str = "hello dear how are you ?";
echo "reverse string is : <br>".strrev($str);
echo "<br>";


echo "<br>";
// string replace which charcter to which charcter :
// syntax :   str_replace('old charcter','new charcter',stringname)

$str = "hello dear how are you ?";
$str1 =  str_replace("e","w",$str);
echo "replace ('e' to W in given string change )after replace string is : <br>".$str1;
echo "<br>";


echo "<br>";
// print substring (at postion 3 after 5 charcter print using this ....)
// syntax :   substr(stringname , startpostion , startpostion to how many charcter you want to print given no like 5,6,7 )


$str = "hello dear how are you ?";
echo "string substring is : ".substr($str,3,5);

echo "<br>";

// Base name of given string is thats :

$path = "D://songs/bollywood/abc.mp3";
echo basename($path);

echo "<br>";

// addslashes of given string is ('' is change on addslashes symbols) :

$str = "Hyper Text 'Markup' Language";
echo addslashes($str);

echo "<br>";

// convert string to array :

$str = "abc.mp3";
$arr = explode('.',$str);
print_r($arr);

echo "<br>";

// convert array to string :

$arr = ["red","blue","green"];
$str = implode("-",$arr);
echo $str;

echo "<br>";

// convert array index to varriable  :

$arr = ['a'=>45,'b'=>88];
extract($arr);
echo $b;

echo "<br>";

// convert varriable to index array   :

$a = 45;
$b = 77;
$arr = compact('a','b');
print_r($arr);


echo "</h4>";


?>