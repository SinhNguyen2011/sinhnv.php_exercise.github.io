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
for($i=0;$i<$n;$i++)
{
    if($float_arr[$i]>0)
    {
        print("Gia tri duong dau tien trong mang la: ");
        print_r($float_arr[$i]);
    }
}
return 1;
