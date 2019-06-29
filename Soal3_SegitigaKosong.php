<?php

//Parameter untuk jumlah tinggi segitiga
segitigaKosong(6);

function segitigaKosong($input){
    $input = ($input%2 == 0? $input : $input -1);
    for ($i = 1; $i <= $input; $i++)
    {
        if($i == 1){
            for($awal = 0; $awal <= $input; $awal++){
                echo " *";
            }
            echo "\n";
            continue;
        }

        for ($j = 1; $j <= $i; $j++){
        echo " ";
        }
        echo "*";
        for ($s = 0; $s >= ($i - $input); $s--){
        echo " ";
        }
        for ($s = 0; $s > ($i - $input); $s--){
        echo " ";
        }
        echo "*";
        echo "\n";
    }
    for ($j = 1; $j <= $i; $j++){
        echo " ";
    }
    echo "*";
}