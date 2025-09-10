<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json; charset=UTF-8");

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "xx2db";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// ตั้งค่า character set เป็น utf8mb4
$conn->set_charset("utf8mb4");
?>