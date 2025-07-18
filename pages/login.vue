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
  background: linear-gradient(135deg, #ffffff 0%,   #ffffff 100%);
}

.login-card {
  background: #fff;
  padding: 2.5rem 2rem;
  border-radius: 1.5rem;
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
  min-width: 340px;
  max-width: 90vw;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.login-title {
  font-size: 2rem;
  font-weight: bold;
  color: #2575fc;
  margin-bottom: 1.5rem;
  letter-spacing: 1px;
}

.input-group {
  width: 100%;
  margin-bottom: 1.2rem;
}

.input-group label {
  display: block;
  margin-bottom: 0.5rem;
  color: #333;
  font-weight: 500;
}

.input-group input {
  width: 100%;
  padding: 0.7rem 1rem;
  border: 1px solid #e0e0e0;
  border-radius: 0.8rem;
  font-size: 1rem;
  transition: border 0.2s;
  outline: none;
}

.input-group input:focus {
  border: 1.5px solid #2575fc;
}

.login-btn {
  width: 100%;
  padding: 0.8rem;
  background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
  color: #fff;
  font-size: 1.1rem;
  font-weight: bold;
  border: none;
  border-radius: 0.8rem;
  cursor: pointer;
  transition: background 0.2s, box-shadow 0.2s;
  box-shadow: 0 2px 8px rgba(37, 117, 252, 0.15);
}

.login-btn:hover {
  background: linear-gradient(90deg, #2575fc 0%, #6a11cb 100%);
  box-shadow: 0 4px 16px rgba(37, 117, 252, 0.25);
}

.login-footer {
  margin-top: 1rem;
}

.login-footer a {
  color: #6a11cb;
  text-decoration: none;
  font-size: 0.95rem;
  transition: color 0.2s;
}

.login-footer a:hover {
  color: #2575fc;
  text-decoration: underline;
}
</style>