<?php

//Parameter merupakan saklar yang akan ditekan, masukkan hanya 1 - 3
echo escapeRoom(2);

function escapeRoom($input){
    $lampu[0] = 0;
    $lampu[1] = 0;
    $lampu[2] = 0;
    $lampu[3] = 0;
    $lampu[4] = 0;
    $lampu[5] = 0;
    $lampu[6] = 0;
    $lampu[7] = 0;
    $lampu[8] = 0;
    $lampu[9] = 0;
    $lampu[10] = 0;
    $lampu[11] = 0;
    $lampu[12] = 0;
    $lampu[13] = 0;
    $lampu[14] = 0;

    $string_temp = (string)$input;
    if (strlen($string_temp) <= 15){
        $split = str_split($string_temp);

        foreach($split as $char){
            if((int)$char < 1 || (int)$char > 3){
                return "Mohon inputkan 15 digit angka hanya angka 1 sampai 3";
            }

            foreach($lampu as $key=>&$lamp){
                if(($key+1) % (int)$char == 0){
                    $lamp = $lamp == 0? 1 : 0;
                }
            }            
        }

        return implode('',$lampu);
    }else{
        return "Mohon inputkan angka kurang dari 15 digit";
    }
}