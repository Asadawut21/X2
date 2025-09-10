<?php
// --- ส่วนสำหรับแสดงข้อผิดพลาด (เพิ่มเข้ามาใหม่) ---
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// -----------------------------------------

// ใช้ __DIR__ เพื่อให้แน่ใจว่า path ไปยังไฟล์ connectdb.php ถูกต้องเสมอ
include __DIR__ . '/connectdb.php';

// รับข้อมูล JSON ที่ส่งมา
$data = json_decode(file_get_contents("php://input"));

// ตรวจสอบว่า json_decode สำเร็จหรือไม่
if (is_null($data)) {
    echo json_encode(["success" => false, "message" => "ไม่ได้รับข้อมูล หรือข้อมูลไม่ใช่รูปแบบ JSON"]);
    exit();
}

if (
    !empty($data->name) &&
    !empty($data->email) &&
    !empty($data->password) &&
    !empty($data->confirmPassword)
) {
    $name = $conn->real_escape_string($data->name);
    $email = $conn->real_escape_string($data->email);
    $password = $data->password;
    $confirmPassword = $data->confirmPassword;

    if ($password !== $confirmPassword) {
        echo json_encode(["success" => false, "message" => "รหัสผ่านไม่ตรงกัน"]);
        exit();
    }

    // ตรวจสอบว่ามีอีเมลนี้ในระบบแล้วหรือยัง
    $checkEmailSql = "SELECT user_id FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmailSql);

    if ($result->num_rows > 0) {
        echo json_encode(["success" => false, "message" => "อีเมลนี้ถูกใช้งานแล้ว"]);
        exit();
    }

    // เข้ารหัสรหัสผ่าน
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // เพิ่มผู้ใช้ใหม่ลงในฐานข้อมูล
    $username = explode('@', $email)[0];
    
    $insertSql = "INSERT INTO users (username, password_hash, email, in_game_name) VALUES ('$username', '$password_hash', '$email', '$name')";

    if ($conn->query($insertSql) === TRUE) {
        echo json_encode(["success" => true, "message" => "สมัครสมาชิกสำเร็จ!"]);
    } else {
        echo json_encode(["success" => false, "message" => "เกิดข้อผิดพลาดในการสมัครสมาชิก: " . $conn->error]);
    }
} else {
    echo json_encode(["success" => false, "message" => "กรุณากรอกข้อมูลให้ครบถ้วน"]);
}

$conn->close();
?>