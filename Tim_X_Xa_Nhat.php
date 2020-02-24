<?php
$float_arr = array(24,45,23,13,43,-12);
$x= 15;
$n = count($float_arr);
$a = $x-$float_arr[0];
for ($i=0; $i <= $n;$i++){
    if (($float_arr[$i] - $x) > $a){
        $a = $float_arr[$i];
        $y =  $float_arr[$i];
    }
}
printf("Gia tri xa gia tri x=15 nhat la: %d\n", $y);