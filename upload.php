<?php

// ambil data file
$nameFile = $_FILES['file']['name'];
$nameSementara = $_FILES['file']['tmp_name'];

// tentukan lokasi file yang akan dipindahkan
$dirUpload = "upload/";

$upload = move_uploaded_file($nameSementara, $dirUpload . $nameFile);

error_reporting(0);
