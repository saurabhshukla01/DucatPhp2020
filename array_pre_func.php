<?php

echo "<h3>";

// create array pre define function :
$arr = array(5,6,7,11,17,18,109,100);
echo "Create a new Array is : <br>";
print_r($arr);

echo "<br>";

// find the length of given array is  :
echo "Upper given array length is : ".sizeof($arr);
echo "<br>";

echo "Upper given array length is : ".count($arr);
echo "<br>";

// maximum no of given array is :

echo "Maximum no is Given array is : ".max($arr);
echo "<br>";

// minimum no of given array is :

echo "Minimum no is Given array is : ".min($arr);
echo "<br>";

// sort of Given array (by defalut is assending to descending order ... )

echo "<br> Sort array is : <br>";
sort($arr);
print_r($arr);


// right sort of Given array (by defalut is descending to assending order ... )

echo "<br> Right Sort array is : <br>";
rsort($arr);
print_r($arr);


//  sort by key in array :
echo "<br> Sort using key array is : <br>";
ksort($arr);
print_r($arr);

//  right to left sort by key in array :
echo "<br> Right Sort using key array is : <br>";
krsort($arr);
print_r($arr);

// reverse array using function :

echo "<br> Reverse array is : <br>";
print_r(array_reverse($arr));


//  insert value in array at last position

echo "<br>  insert value in array at last position  : <br>";
$arr1 = [40,10];
array_push($arr1,100);
print_r($arr1);

// delete last element of array

echo "<br> delete last element of array  : <br>";
$arr1 = [40,10];
array_pop($arr1);
print_r($arr1);

//  insert value in array at first position

echo "<br>  insert value in array at first position   : <br>";
$arr1 = [40,10];
array_unshift($arr1,100);
print_r($arr1);


//   delete first element of array

echo "<br>   delete first element of array   : <br>";
$arr1 = [40,10];
array_shift($arr1);
print_r($arr1);


//   sum of array

echo "<br>   Sum of array   : <br>";
$arr1 = [40,10,90,100,101,1];
echo array_sum($arr1);

// merge files of given Array  :
echo "<br>   Merge of array   : <br>";
$arr1 = [4,5,6];
$arr2 = ["red","blue","green"];
$arr3 = array_merge($arr1,$arr2);
print_r($arr3);

// merge files of given Array  :
echo "<br>   Merge of array   : <br>";
$arr1 = [4,5,6];
$arr2 = ["red","blue","green"];
$arr3 = array_merge($arr1,$arr2);
print_r($arr3);


//  merge both array first array as index and second array as value  :

echo "<br>   merge both array first array as index and second array as value  : <br>";
$arr1 = [4,5,6];
$arr2 = ["red","blue","green"];
$arr3 = array_combine($arr1,$arr2);
print_r($arr3);


// check array is not :

echo "<br>  Check array or not : <br>";
$x = [4,5];
if(is_array($x))
{
echo "it is array";
}
else
{
echo "it is not array";
}


//  get last element of array :

echo "<br>  get last element of array : <br>";
$arr = [5,4,12];
echo end($arr);

echo "</h3>";

?>