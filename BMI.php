<?php
$berat = 100 ;
$tinggi = 1.7 ;
$hasil = ($berat)/($tinggi*$tinggi) ;

printf ("BMI : %.3f<br>", $hasil);

if ($hasil<=18.5) {
    echo "Berat badan anda kurang";
}
else if (($hasil>18.5) && ($hasil<=22.9)){
echo " Berat badan anda normal";
}
else if (($hasil>22.9) && ($hasil<=29.9)){
echo "Berat badan anda berlebih" ;
}
else if ($hasil>30){
echo  "Obesitas";
}

?>