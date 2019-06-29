<?php

echo is_username_valid("aklsdjfl");
echo is_password_valid("C0d3YourFuture!@#");
echo is_phone_valid("+628768123123");
echo is_email_valid("tes@email.com");

function is_username_valid($input){
    //Jika input memiliki jumlah karakter 5 - 9 dan input tidak ada karakter selain a-z maka true
    if (strlen($input) >= 5 && strlen($input) <= 9 && preg_match('/^[a-z]+$/', $input)){
        return true;
    }else{
        return false;
    }
}

function is_password_valid($input){
    //  Jika input lebih dari 8     &&   Jika input terdapat kombinasi huruf besar dan kecil && Jika input terdapat kombinasi angka &&
    //  Jika input terdapat symbol "#" (Untuk pengecekan symbol khusus ditiadakan karena sudah pasti harus ada symbol pagar #)
    if (strlen($input) >= 8 && preg_match('/[a-z]/', $input) && preg_match('/[A-Z]/', $input) && preg_match('/\d/', $input) && preg_match('/#/', $input)){
        return true;
    }else{
        return false;
    }
}

function is_phone_valid($input){
    //  Jika input memiliki jumlah karakter 8 - 15
    //  Jika input terdapat karakter +62 didepan
    if (strlen($input) >= 8 && strlen($input) <= 15 && preg_match('/^\+62?\d+$/', $input)){
        return true;
    }else{
        return false;
    }
}

function is_email_valid($input){
    //  Jika input memiliki 2 karakter atau lebih sebelum tanda @
    if (preg_match('/^[a-z]{2,}+@[a-zA-Z0-9]+\.[a-zA-z0-9]{2,}$/', $input)){
        return true;
    }else{
        return false;
    }
}
