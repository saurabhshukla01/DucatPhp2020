<?php

/*
calculate the software of bill :
enter user unit = like (390)

montly fix charge = 250
first 100 units 4/unit
next 100 units 6/unit
next 100 units 8/unit
remaning unit 10/unit

*/


$unit = 320;
if($unit <= 100){
    $bill = ($unit)*4 + 250;
    echo "Your bill is ".$bill;
}
elseif($unit>100 && $unit<=200){
    $unit = $unit - 100;
    $bill = ($unit)*6 + 650;
    echo "Your bill is ".$bill;
}
elseif($unit>200 && $unit<=300){
    $unit = $unit - 200;
    $bill = ($unit)*8 + 1250;
    echo "Your bill is ".$bill;
}
else{
    $unit = $unit - 300;
    $bill = ($unit)*10 + 2050;
    echo "Your bill is ".$bill;
}

?>