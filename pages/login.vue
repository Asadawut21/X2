<template>
  <div class="form-container">
    <div class="form-card">
      <img src="/xx2.png" alt="Logo" class="page-logo" />
      <h2 class="form-title">เข้าสู่ระบบ</h2>
      <div v-if="message" :class="['message', messageType]">
        {{ message }}
      </div>
      <form @submit.prevent="handleLogin">
        <div class="input-group">
          <label for="email">อีเมล</label>
          <input id="email" v-model="email" type="email" required />
        </div>
        <div class="input-group">
          <label for="password">รหัสผ่าน</label>
          <input id="password" v-model="password" type="password" required />
        </div>
        <button class="form-btn" type="submit">เข้าสู่ระบบ</button>
      </form>
      <div class="form-footer">
        <a href="#">ลืมรหัสผ่าน?</a>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: '',
      message: '',
      messageType: '' // 'success' or 'error'
    };
  },
  methods: {
    async handleLogin() {
      try {
        // **สำคัญ:** แก้ไข URL ให้ตรงกับที่อยู่ของไฟล์ PHP ของคุณ
        const response = await axios.post('http://localhost/api/login.php', {
          email: this.email,
          password: this.password
        });
        
        if (response.data.success) {
          this.message = response.data.message;
          this.messageType = 'success';
          // ทำการ redirect หรือเก็บข้อมูล user ไว้ใน state/store
          // ตัวอย่าง: ไปที่หน้าหลัก
          setTimeout(() => {
            this.$router.push('/');
          }, 1500);
        } else {
          this.message = response.data.message;
          this.messageType = 'error';
        }
      } catch (error) {
        this.message = 'เกิดข้อผิดพลาดในการเชื่อมต่อกับเซิร์ฟเวอร์';
        this.messageType = 'error';
        console.error('Login error:', error);
      }
    },
  },
};
</script>

<style scoped>
/* (Styles from your original file) */
.form-container {
  min-height: calc(100vh - 64px);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2rem;
}
.form-card {
  background: #fff;
  padding: 2.5rem;
  border-radius: 24px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  text-align: center;
}
.message {
  padding: 1rem;
  margin-bottom: 1rem;
  border-radius: 8px;
  color: #fff;
}
.message.success {
  background-color: #28a745;
}
.message.error {
  background-color: #dc3545;
}
.page-logo {
  max-width: 120px;
  margin-bottom: 1.5rem;
}
.form-title {
  font-size: 2rem;
  font-weight: 700;
  color: #333;
  margin-bottom: 2rem;
}
.input-group {
  margin-bottom: 1.5rem;
  text-align: left;
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
  border-radius: 8px;
  font-size: 1rem;
  transition: all 0.2s;
}
.input-group input:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
  outline: none;
}
.form-btn {
  width: 100%;
  padding: 0.9rem;
  background-color: #007bff;
  color: #fff;
  font-size: 1.1rem;
  font-weight: 600;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: all 0.2s;
}
.form-btn:hover {
  background-color: #0056b3;
  box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
}
.form-footer {
  margin-top: 1.5rem;
}
.form-footer a {
  color: #007bff;
  text-decoration: none;
}
.form-footer a:hover {
  text-decoration: underline;
}
</style>