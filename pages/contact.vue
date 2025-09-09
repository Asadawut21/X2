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
git config --global user.name "Your Name"
<style scoped>
.contact-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
}
.contact-card {
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
    padding: 40px 32px;
    max-width: 400px;
    width: 100%;
    text-align: center;
}
.contact-card h1 {
    margin-bottom: 10px;
    color: #2d3a4b;
}
.contact-card p {
    color: #6b7a8f;
}
.contact-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin: 24px 0;
}
.contact-form input,
.contact-form textarea {
    padding: 12px;
    border: 1px solid #e0eafc;
    border-radius: 8px;
    font-size: 1rem;
    outline: none;
    transition: border 0.2s;
}
.contact-form input:focus,
.contact-form textarea:focus {
    border: 1.5px solid #7f9cf5;
}
.contact-form button {
    background: linear-gradient(90deg, #7f9cf5 0%, #5a67d8 100%);
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 12px;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.2s;
}
.contact-form button:hover {
    background: linear-gradient(90deg, #5a67d8 0%, #7f9cf5 100%);
}
.contact-info {
    margin-top: 20px;
    font-size: 0.95rem;
    color: #4a5568;
    text-align: left;
}
</style>