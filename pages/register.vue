<template>
  <div class="form-container">
    <div class="form-card">
      <img src="/xx2.png" alt="Logo" class="page-logo" />
      <h2 class="form-title">สมัครสมาชิก</h2>
      <form @submit.prevent="submitForm">
        <div class="input-group">
          <label for="name">ชื่อ-นามสกุล</label>
          <input type="text" id="name" v-model="form.name" required />
        </div>
        <div class="input-group">
          <label for="email">อีเมล</label>
          <input type="email" id="email" v-model="form.email" required />
        </div>
        <div class="input-group">
          <label for="password">รหัสผ่าน</label>
          <input type="password" id="password" v-model="form.password" required />
        </div>
        <div class="input-group">
          <label for="confirmPassword">ยืนยันรหัสผ่าน</label>
          <input type="password" id="confirmPassword" v-model="form.confirmPassword" required />
        </div>
        <button type="submit" class="form-btn">สมัครสมาชิก</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: '',
        email: '',
        password: '',
        confirmPassword: ''
      }
    };
  },
  methods: {
    submitForm() {
      alert('สมัครสมาชิกสำเร็จ!');
    }
  }
};
</script>

<style scoped>
/* ใช้ CSS เดียวกับหน้า login.vue */
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
  max-width: 420px;
  text-align: center;
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
  margin-bottom: 1.2rem;
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
</style>