<template>
  <div class="welcome-container">
    <div class="welcome-card">
      <h1>ยินดีต้อนรับ</h1>
      <p>ขอบคุณที่เข้ามาเยี่ยมชมเว็บไซต์ของเรา</p>
      <button class="welcome-btn">เข้าสู่หน้าหลัก</button>
    </div>
  </div>
</template>

<script setup>
// สามารถใส่ฟังก์ชันนำทาง เช่น useRouter().push('/') ได้ตรงนี้
</script>

<style scoped>
/* พื้นหลังแบบ gradient ที่นุ่มตา */
.welcome-container {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
  font-family: 'Segoe UI', 'Noto Sans Thai', sans-serif;
}

/* กล่องข้อความที่ดูมีมิติ */
.welcome-card {
  background: #ffffff;
  padding: 3rem;
  border-radius: 1.25rem;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.06);
  text-align: center;
  max-width: 420px;
  width: 100%;
}

/* หัวข้อหลัก */
.welcome-card h1 {
  font-size: 2.2rem;
  font-weight: 600;
  color: #1a202c;
  margin-bottom: 1rem;
}

/* ข้อความรอง */
.welcome-card p {
  font-size: 1.1rem;
  color: #4a5568;
  margin-bottom: 2rem;
  line-height: 1.6;
}

/* ปุ่มหลัก */
.welcome-btn {
  background-color: #1a202c;
  color: #ffffff;
  border: none;
  padding: 0.75rem 2rem;
  border-radius: 999px;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

/* เมื่อ hover ปุ่ม */
.welcome-btn:hover {
  background-color: #2d3748;
}
</style>
