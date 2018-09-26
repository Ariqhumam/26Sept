<html>
<head>

</head>
<body>
<?php
$nim = "0411500400";
$nama = "Sahroni";
$umur = "20";
$nilai = 82.5;
$status = TRUE;
echo "NIM :".$nim."<br>";
echo "Nama :".$nama."<br>";
print "Umur :".$umur;print"<br>";
printf("Nilai : %.3f<br>",$nilai);
if($status)
	echo "Status : Aktif";
else
	echo "Status : Tidak Aktif";
/**10~5~12.5
10~6~3.5
10~6~3.5~50
11~6~-6.5~106
11~5~-10.5
13~4~-6.5
13~4~-5.56
12~3~-5.56
12~4~-6.5*/
$a = 10;
$b = 5;
$c = 6;
$d = 13;
$e = 11;
$f = 4;
$g = 12;
$h = 3;

echo "<p>1. 10 ~ 5 ~ " , $a + $b / 2 , "<br>";
echo "2. 10 ~ 6 ~ ", ($a + $c - 9) /2,"<br>";
echo "3. 10 ~ 6 ~ ", ($a + $c - 9) /2," ~ ", ($c-($a + $c - 9) /2) *2*$a,"<br>";
echo "4. 11 ~ 6 ~ -6.5 ~ ", $a*$a+$c,"<br>";
echo "5. 11 ~ 5 ~ ", ($e-$b+4.5)*(-1),"<br>";
echo "6. 13 ~ 4 ~ ", ($d-$f-2.5)*(-1),"<br>";
echo "7. 13 ~ 4 ~ ", ($d-$f-3.44)*(-1),"<br>";
echo "8. 12 ~ 3 ~ ", ($g-$h-3.44)*(-1),"<br>";
echo "9. 12 ~ 4 ~ ", ($g-$f-1.5)*(-1),"<br>" ;
?>
</body>
</html>