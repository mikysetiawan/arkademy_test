<?php

//Parameter tinggiPohon(tinggiAwal, tahun);
echo tinggiPohon(2,2);

function tinggiPohon($tinggiAwal, $tahun){
    $tinggi = $tinggiAwal;
    for($i = 1; $i <= $tahun; $i++){
        $tinggi = musimSemi($tinggi);
        $tinggi = musimPanas($tinggi);
        $tinggi = musimGugur($tinggi);
        $tinggi = musimDingin($tinggi);
        
        if($i%2 == 0){
            $tinggi = $tinggi/2;
        }
    }
    
    return round($tinggi,2);
}

function musimSemi($tinggi){
    return $tinggi + 1;
}

function musimPanas($tinggi){
    return $tinggi * 3;
}

function musimGugur($tinggi){
    return (float)$tinggi - 1.5;
}

function musimDingin($tinggi){
    return $tinggi + ((15 / 100) * $tinggi);
}