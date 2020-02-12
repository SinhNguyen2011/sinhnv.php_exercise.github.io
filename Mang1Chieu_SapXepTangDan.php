
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
    for($j=0;$j<$n;$j++)
        {
            if(($float_arr[$j] > $float_arr[$i]) AND ($j < $i))
            {
                $temp = $float_arr[$j];
                $float_arr[$j] = $float_arr[$i];
                $float_arr[$i] = $temp;
            }
        }
}
print("Day so sap xep tang dan la: ");
for($i=0;$i<$n;$i++)
{
    printf("%d\n",$float_arr[$i]);
}