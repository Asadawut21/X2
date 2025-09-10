<?php
session_start();
include 'connectdb.php';

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->email) && !empty($data->password)) {
    $email = $conn->real_escape_string($data->email);
    $password = $data->password;

    $sql = "SELECT user_id, username, password_hash, email FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // ตรวจสอบรหัสผ่าน
        if (password_verify($password, $user['password_hash'])) {
            // สร้าง Session
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];

            echo json_encode([
                "success" => true,
                "message" => "เข้าสู่ระบบสำเร็จ!",
                "user" => [
                    "id" => $user['user_id'],
                    "username" => $user['username'],
                    "email" => $user['email']
                ]
            ]);
        } else {
            echo json_encode(["success" => false, "message" => "รหัสผ่านไม่ถูกต้อง"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "ไม่พบผู้ใช้นี้ในระบบ"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "กรุณากรอกอีเมลและรหัสผ่าน"]);
}

$conn->close();
?>