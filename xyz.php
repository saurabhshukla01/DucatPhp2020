<?php

// one diffrence in include and require is (if include which file not in your directory show warning and after excute file data )
//  or in require (if require which file not in your directory show warning and after excute no file data ... means full error on page .)
//  include files using to single page which time add the files it same (abc.php is three time then add the same page is three times .)


include('abc.php');
echo "This is XYZ files <br>";
include('abc.php');

/*

//  include_once files using to single page which time add the files it same (abc.php added three time then show one times then use include_once


include('abc.php');
echo "This is XYZ files <br>";
include_once('abc.php');



//  require files using to single page which time add the files it same (abc.php is three time then add the same page is three times .)


require('abc.php');
echo "This is XYZ files <br>";
require('abc.php');
require('abc.php');



//  require_once files using to single page which time add the files it same (abc.php added three time then show one times then use require_once


require('abc.php');
echo "This is XYZ files <br>";
require_once('abc.php');

*/

?>