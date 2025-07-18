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
    background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%);
}

.register-card {
    background: #fff;
    padding: 2.5rem 2rem;
    border-radius: 1.25rem;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
    width: 100%;
    max-width: 400px;
}

.title {
    text-align: center;
    margin-bottom: 2rem;
    font-weight: 600;
    font-size: 2rem;
    color: #2d3748;
    letter-spacing: 1px;
}

.form-group {
    margin-bottom: 1.25rem;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    color: #4a5568;
    font-weight: 500;
}

input {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 1px solid #e2e8f0;
    border-radius: 0.75rem;
    background: #f9fafb;
    font-size: 1rem;
    transition: border 0.2s;
}

input:focus {
    border-color: #4299e1;
    outline: none;
    background: #fff;
}

.register-btn {
    width: 100%;
    padding: 0.75rem;
    background: linear-gradient(90deg, #4299e1 0%, #7f9cf5 100%);
    color: #fff;
    border: none;
    border-radius: 0.75rem;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.2s;
    margin-top: 0.5rem;
}

.register-btn:hover {
    background: linear-gradient(90deg, #3182ce 0%, #5a67d8 100%);
}
</style>