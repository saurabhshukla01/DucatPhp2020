<?php

/*

// file write data and create also .

$fo = fopen('empty.txt','w');
fwrite($fo,"Hello \nHow are \nyou ?");


// file read and echo to print her given charter value user choice ..
$fo = fopen('empty.txt','r');
echo fread($fo,3);

*/

$fo = fopen("empty.txt","r");
//echo fread($fo,3);                // print user choice create in read files
//echo filesize("empty.txt");      // find the file size how many charcter
//echo fread($fo,filesize("abc.txt"));   // file full size to all data and read also
//echo fgets($fo);          // line by line read file
//echo fgetc($fo);          //  charcter by charcter read line

/*
while(!feof($fo))
{
	echo fgetc($fo);              // charcter by charcter excute file data
	echo "<br>";
}


while(!feof($fo))
{
	echo fgets($fo);            // line by line excute file data
	echo "<br>";
}


// both function is used to write data in files :

// fwrite($fo,"Data");         // write data in file
// fputs($fo,"Data");          // write data in file

*/

// file_put_contents("xyz.txt","Delhi\nNoida");     // create file if not exist, open file in w model and write data


// file_get_contents("xyz.txt");               // open file in r mode and read whole file

// echo file_get_contents("xyz.txt");

// fclose($fo);                         // close file if user open file then use this files


?>