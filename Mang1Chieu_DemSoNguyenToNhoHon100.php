
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
$count = 0;

for($i=0;$i<$n;$i++)
{       
	$x = sqrt($float_arr[$i]);
	for($j=2;$j <100;$j++){
		if ($x % $j == 0) {
            $count += 1;
        }
	}
}
print("So luong so nguyen to nho hon 100 trong mang la: ");
printf($count);