<?php

//Parameter tinggiPohon(tinggiAwal, tahun);
echo pemisahAngka(223123012312345);

function pemisahAngka($input){
    $string_temp = (string)$input;
    $splits = explode('0', $string_temp);

    $hasil = null;

    foreach($splits as $split){
        $char = str_split($split);
        sort($char, SORT_NUMERIC);

        $hasil .= implode('', $char);
    }

    print_r($hasil);
}