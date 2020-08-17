<?php
# how to print any value or string in php (used echo and print both ).
echo "Hello";
# print the new line in browser (using the br in "" double quote ).
echo "<br>";
# use the print . write the value on browser so used it.
print "Hello";
echo "<br>";
# use multiple statement write only echo keyword.
echo "Hello","Ducat<br>";
# use only single statement then use both echo and print.
echo "Hello <br>"; print "Ducat <br>";
# use html tag in php
echo "<h1> India </h1>"; print "<h2> Country </h2>";
# not used short tag and aps tag in current feature of php only use standard  Delimiters.
/*
 difference b/t echo and print keyword :
  echo is fast processing , and print is slow processing (echo excute the multiple statement and print excute
  only single statement .)
*/
# print "Ducat","india"; (show error because print excute in only one statement.)
echo "Ducat","India <br>";
# added conctenation using (.dot)
echo "Hello"."world";
echo "<br>";
print "Hello"."PHP"."<br>";



?>
