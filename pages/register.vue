<template>
  <div class="register-container">
    <div class="register-card">
      <h2 class="title">สมัครสมาชิก</h2>
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="name">ชื่อ-นามสกุล</label>
          <input type="text" id="name" v-model="form.name" required />
        </div>
        <div class="form-group">
          <label for="email">อีเมล</label>
          <input type="email" id="email" v-model="form.email" required />
        </div>
        <div class="form-group">
          <label for="password">รหัสผ่าน</label>
          <input type="password" id="password" v-model="form.password" required />
        </div>
        <div class="form-group">
          <label for="confirmPassword">ยืนยันรหัสผ่าน</label>
          <input type="password" id="confirmPassword" v-model="form.confirmPassword" required />
        </div>
        <button type="submit" class="register-btn">สมัครสมาชิก</button>
      </form>
    </div>
  </div>
</template>

<script setup>
import { reactive } from 'vue'

const form = reactive({
  name: '',
  email: '',
  password: '',
  confirmPassword: ''
})

function submitForm() {
  // เพิ่ม logic การสมัครสมาชิกที่นี่
  alert('สมัครสมาชิกสำเร็จ!')
}
</script>

<style scoped>
.register-container {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.register-card {
  background: #fff;
  padding: 2.5rem 2rem;
  border-radius: 1.5rem;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
}

.title {
  text-align: center;
  margin-bottom: 2rem;
  font-weight: bold;
  font-size: 2.2rem;
  color: #333;
}

.form-group {
  margin-bottom: 1.5rem;
}

label {
  display: block;
  margin-bottom: 0.5rem;
  color: #555;
  font-weight: 500;
}

input {
  width: 100%;
  padding: 0.8rem 1rem;
  border: 1px solid #ddd;
  border-radius: 0.5rem;
  background: #f9fafb;
  font-size: 1rem;
  transition: all 0.2s;
}

input:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
  outline: none;
}

.register-btn {
  width: 100%;
  padding: 0.9rem;
  background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
  color: #fff;
  border: none;
  border-radius: 0.5rem;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.2s;
}

.register-btn:hover {
  background: linear-gradient(90deg, #0056b3 0%, #007bff 100%);
  box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
}
</style>