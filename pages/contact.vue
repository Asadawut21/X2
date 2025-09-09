<template>
  <div class="contact-container">
    <div class="contact-card">
      <h1>ติดต่อเรา</h1>
      <p>เรายินดีให้บริการและตอบทุกคำถามของคุณ</p>
      <form class="contact-form">
        <input type="text" placeholder="ชื่อของคุณ" required />
        <input type="email" placeholder="อีเมลของคุณ" required />
        <textarea placeholder="ข้อความของคุณ" rows="5" required></textarea>
        <button type="submit">ส่งข้อความ</button>
      </form>
      <div class="contact-info">
        <p><strong>อีเมล:</strong> info@example.com</p>
        <p><strong>โทร:</strong> 02-123-4567</p>
        <p><strong>ที่อยู่:</strong> 123 ถนนสุขุมวิท กรุงเทพฯ</p>
      </div>
    </div>
  </div>
</template>

<style scoped>
.contact-container {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}
.contact-card {
  background: #fff;
  border-radius: 1.5rem;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
  padding: 2.5rem 2rem;
  max-width: 420px;
  width: 100%;
  text-align: center;
}
.contact-card h1 {
  margin-bottom: 1rem;
  color: #333;
  font-weight: bold;
}
.contact-card p {
  color: #555;
  margin-bottom: 1.5rem;
}
.contact-form {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  margin: 1.5rem 0;
}
.contact-form input,
.contact-form textarea {
  padding: 0.8rem 1rem;
  border: 1px solid #ddd;
  border-radius: 0.5rem;
  font-size: 1rem;
  outline: none;
  transition: all 0.2s;
}
.contact-form input:focus,
.contact-form textarea:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
}
.contact-form button {
  background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
  color: #fff;
  border: none;
  border-radius: 0.5rem;
  padding: 0.9rem;
  font-size: 1.1rem;
  cursor: pointer;
  transition: all 0.2s;
}
.contact-form button:hover {
  background: linear-gradient(90deg, #0056b3 0%, #007bff 100%);
  box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
}
.contact-info {
  margin-top: 1.5rem;
  font-size: 0.95rem;
  color: #555;
  text-align: left;
}
</style>