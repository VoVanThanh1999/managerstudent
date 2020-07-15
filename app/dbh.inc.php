<?php
$dbServername = "localhost:3306";
$dbUsername = "root";
$dbPassword = "newPass";
$dbName = "quanlysinhvien1";
$conn =  mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName ) or die('Not connected : Ah sh*t ');
$sql = "SELECT * FROM SinhVien;";

