<?php
print "So phan tu cua mang: ";
$float_arr = array();
$n = 0;
fscanf(STDIN,"%d\n",$n);
for($i=0;$i<$n;$i++){
    printf("Nhap vao phan tu thu %d: ", $i+1);
    fscanf(STDIN,"%d\n",$float_arr[]);
}
if(empty($float_arr)){
    print "Chua nhap du lieu cho mang";
    exit;
}
$min = $float_arr[0];
$k=1;
for($i=0;$i<$n;$i++){
    if($float_arr[$i] < $min ){
        $min = $float_arr[$i];
        $k = $i;
    }
}
printf("Phan tu gia tri nho nhat: %d - tai vi tri %d\n", $min, ($k+1));