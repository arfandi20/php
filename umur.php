<?php
$umur = 25;
$jeniskelamin = "Perempuan";

if($umur > 18){
    if($jeniskelamin == "pria") {
        if($umur >= 25 ) {
        echo "Selamat datang pak!";
        }
        else if($umur < 25 ) {
            echo "Selamat datang anak laki-laki!";
        }
    } 
    else if ($jeniskelamin == "perempuan"){
        if($umur >= 25 ) {
            echo "Selamat datang buk!";
        }
        else if($umur < 25 ) {
            echo "Selamat datang anak perempuan!";
        }
    } 
    else {
        echo "jenis kelamin harus 'pria' atau 'perempuan'";
    }
}
else {
    echo "Maaf website ini hanya untuk yang sudah berumur 18+";
}

?>