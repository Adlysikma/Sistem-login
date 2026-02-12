<?php

 $nama = $_POST["nama"];
 $email = $_POST["email"];
 $telp = $_POST["no_telepon"];
 $password = $_POST["password"];
 $re_password = $_POST["ulangi_password"];

$email_fix = "oranggila@gmail.com";
// $password_fix = "asep123";




if ($email == $email_fix) {
    echo"email telah dipakai";
}
else {
    if ($password == $re_password) {
        echo "berhasil register";
    }
    else {
        echo"password salah";
    }
}




// if ($email === $email_fix) {
//     if ($password === $password_fix && $re_password === $password) {
//         echo"berhasil register";
//     }
//     else {
//         echo "password salah";
//     }
// }else {
//     echo "email sudah tersedia";
// }