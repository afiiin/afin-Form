<?php

$nama = $_POST['Name'];
$email = $_POST['Email'];
$gender = $_POST['Gender'];
$city = $_POST['Kota'];
$status = $_POST['Status'];

var_dump(
    "insert into registration(Name, Email, Gender, Kota, Status) Values ('$nama', '$email', '$gender', '$city', '$status')"
);
include "koneksi.php";
mysqli_query($conn, "insert into registration(Name, Email, Gender, City, Status) Values ('$nama', '$email', '$gender', '$city', '$status')") or die("gagal");