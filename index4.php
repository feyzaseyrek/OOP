<?php
require 'calculator.php';

if (isset($_POST['arti'])) {
    $cn = $hesapla->arti($_POST['n1'], $_POST['n2']);
}
if (isset($_POST['eksi'])) {
    $cn = $hesapla->eksi($_POST['n1'], $_POST['n2']);
}
if (isset($_POST['bolme'])) {
    $cn = $hesapla->bolme($_POST['n1'], $_POST['n2']);
}
if (isset($_POST['carpma'])) {
    $cn = $hesapla->carpma($_POST['n1'], $_POST['n2']);
}
if (isset($_POST['yenile'])){
    $hesapla->yenile('index4.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP İLE HESAP MAKİNESİ</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto mt-5">
            <div class="alert alert-success text-center bg-white">FEYZA- HESAP MAKİNESİ- OOP</div>
            <form method="post">
            <div class="form-group">
                <input type="number" class="form-control" name="n1" placeholder="İlk sayıyı giriniz">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="n2" placeholder="İkinci sayıyı giriniz">
            </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST"){
               echo "<div class='alert alert-dark text-center'>$cn</div>";
                }
                ?>

            <div class=" text-center ">
                <button type="submit" name="arti" class="btn btn-success mr-5" >+ Toplama</button>
                <button type="submit" name="eksi" class="btn btn-danger mr-5">- Çıkarma</button>
                <button type="submit" name="bolme" class="btn btn-warning mr-5">/ Bölme</button>
                <button type="submit" name="carpma" class="btn btn-secondary">* Çarpma</button>
                <button type="submit" name="yenile" class="btn btn-primary ml-5">Yenile</button>
            </div>
            </form>

        </div>


    </div>
</div>
</body>
</html>
