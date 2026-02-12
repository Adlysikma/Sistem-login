 <?php
$nama= $_POST["nama"];
$password = $_POST["password"];

if ($nama == "admin") {
    if ($password == "admin123") {
        echo"Berhasil login";
    }
    else {
        echo "password salah";
    }
}
else {
    echo "username salah";
}








// elseif (!($nama == "admin") && $password == "admin123") {
//     echo "nama salah";
// }
// elseif ($nama == "admin" && !($password == "admin123")) {
//     echo "password salah";
// }else {
//     echo "semuanya salah";
// }
















// $input1 = $_GET["input1"];
// $input2 = $_GET["input2"];

// $hasil = $input1+$input2;

// echo $hasil;





// echo $input1 + $input2;