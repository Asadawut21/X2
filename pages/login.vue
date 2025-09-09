<template>
  <div class="login-container">
    <div class="login-card">
      <h2 class="login-title">เข้าสู่ระบบ</h2>
      <form @submit.prevent="handleLogin">
        <div class="input-group">
          <label for="email">อีเมล</label>
          <input
            id="email"
            v-model="email"
            type="email"
            placeholder="กรอกอีเมลของคุณ"
            required
          />
        </div>
        <div class="input-group">
          <label for="password">รหัสผ่าน</label>
          <input
            id="password"
            v-model="password"
            type="password"
            placeholder="กรอกรหัสผ่าน"
            required
          />
        </div>
        <button class="login-btn" type="submit">เข้าสู่ระบบ</button>
      </form>
      <div class="login-footer">
        <a href="#">ลืมรหัสผ่าน?</a>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const email = ref('')
const password = ref('')

function handleLogin() {
  // ใส่ logic การล็อคอินที่นี่
  alert(`อีเมล: ${email.value}\nรหัสผ่าน: ${password.value}`)
}
</script>

<style scoped>
.login-container {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.login-card {
  background: #fff;
  padding: 2.5rem 2rem;
  border-radius: 1.5rem;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 380px;
}

.login-title {
  font-size: 2.2rem;
  font-weight: bold;
  color: #333;
  margin-bottom: 2rem;
  text-align: center;
}

.input-group {
  width: 100%;
  margin-bottom: 1.5rem;
}

.input-group label {
  display: block;
  margin-bottom: 0.5rem;
  color: #555;
  font-weight: 500;
}

.input-group input {
  width: 100%;
  padding: 0.8rem 1rem;
  border: 1px solid #ddd;
  border-radius: 0.5rem;
  font-size: 1rem;
  transition: all 0.2s;
}

.input-group input:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
  outline: none;
}

.login-btn {
  width: 100%;
  padding: 0.9rem;
  background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
  color: #fff;
  font-size: 1.1rem;
  font-weight: bold;
  border: none;
  border-radius: 0.5rem;
  cursor: pointer;
  transition: all 0.2s;
}

.login-btn:hover {
  background: linear-gradient(90deg, #0056b3 0%, #007bff 100%);
  box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
}

.login-footer {
  margin-top: 1.5rem;
  text-align: center;
}

.login-footer a {
  color: #007bff;
  text-decoration: none;
  font-size: 0.9rem;
  transition: color 0.2s;
}

.login-footer a:hover {
  color: #0056b3;
  text-decoration: underline;
}
</style>