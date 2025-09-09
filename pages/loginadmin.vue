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
  background: linear-gradient(135deg, #2c3e50 0%, #4ca1af 100%);
  display: flex;
  align-items: center;
  justify-content: center;
}
.login-card {
  background: #fff;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
  border-radius: 1.5rem;
  padding: 2.5rem 2rem;
  max-width: 380px;
  width: 100%;
}
h2 {
  text-align: center;
  margin-bottom: 2rem;
  font-weight: bold;
  color: #2c3e50;
}
.form-group {
  margin-bottom: 1.5rem;
}
label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 500;
  color: #555;
}
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 0.8rem 1rem;
  border: 1px solid #ddd;
  border-radius: 0.5rem;
  background: #f9fafb;
  font-size: 1rem;
  transition: all 0.2s;
}
input[type="text"]:focus,
input[type="password"]:focus {
  border-color: #4ca1af;
  box-shadow: 0 0 0 3px rgba(76, 161, 175, 0.1);
  outline: none;
}
button {
  width: 100%;
  padding: 0.9rem;
  background: linear-gradient(90deg, #4ca1af 0%, #2c3e50 100%);
  color: #fff;
  border: none;
  border-radius: 0.5rem;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s;
}
button:hover {
  background: linear-gradient(90deg, #2c3e50 0%, #4ca1af 100%);
  box-shadow: 0 4px 15px rgba(44, 62, 80, 0.2);
}
.error {
  color: #d32f2f;
  margin-top: 1rem;
  text-align: center;
}
</style>