<template>
    <div class="login-admin">
        <div class="login-card">
            <h2>เข้าสู่ระบบผู้ดูแล</h2>
            <form @submit.prevent="login">
                <div class="form-group">
                    <label for="username">ชื่อผู้ใช้</label>
                    <input
                        type="text"
                        id="username"
                        v-model="username"
                        required
                        autocomplete="username"
                        placeholder="กรอกชื่อผู้ใช้"
                    />
                </div>
                <div class="form-group">
                    <label for="password">รหัสผ่าน</label>
                    <input
                        type="password"
                        id="password"
                        v-model="password"
                        required
                        autocomplete="current-password"
                        placeholder="กรอกรหัสผ่าน"
                    />
                </div>
                <button type="submit">เข้าสู่ระบบ</button>
                <p v-if="error" class="error">{{ error }}</p>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'

const username = ref('')
const password = ref('')
const error = ref('')

function login() {
    if (username.value === 'admin' && password.value === 'admin123') {
        alert('เข้าสู่ระบบสำเร็จ')
        error.value = ''
    } else {
        error.value = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง'
    }
}
</script>

<style scoped>
.login-admin {
    min-height: 100vh;
    background: linear-gradient(135deg, #ffffff 0%, #ffffff 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}
.login-card {
    background: #fff;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
    border-radius: 18px;
    padding: 40px 32px 32px 32px;
    max-width: 370px;
    width: 100%;
    transition: box-shadow 0.3s;
}
.login-card:hover {
    box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.22);
}
h2 {
    text-align: center;
    margin-bottom: 28px;
    font-weight: 700;
    color: #1976d2;
    letter-spacing: 1px;
}
.form-group {
    margin-bottom: 22px;
}
label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #333;
}
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #e0e7ef;
    border-radius: 8px;
    background: #f7fafd;
    font-size: 15px;
    transition: border 0.2s;
    outline: none;
}
input[type="text"]:focus,
input[type="password"]:focus {
    border: 1.5px solid #1976d2;
    background: #fff;
}
button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(90deg, #1976d2 60%, #42a5f5 100%);
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 17px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 8px;
    box-shadow: 0 2px 8px 0 rgba(25, 118, 210, 0.08);
    transition: background 0.2s;
}
button:hover {
    background: linear-gradient(90deg, #1565c0 60%, #1976d2 100%);
}
.error {
    color: #d32f2f;
    margin-top: 16px;
    text-align: center;
    font-size: 15px;
    letter-spacing: 0.5px;
}
</style>