<?php
$id = $_GET["id"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_restok_produk.php?id=<?=$id?>" method="POST">
         stok:<input type="number" name="stok"><br>

        <input type="submit">
    </form>
</body>
</html>