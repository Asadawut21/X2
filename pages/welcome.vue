<template>
  <div class="welcome-container page-container">
    <div class="welcome-card">
      <h1>ยินดีต้อนรับสมาชิกใหม่!</h1>
      <p>
        ขอบคุณที่เข้าร่วมกับเรา!<br />
        เราหวังว่าคุณจะได้รับประสบการณ์ที่ดีและสนุกสนานกับบริการของเรา
      </p>
      <button class="start-btn" @click="goToHome">เริ่มต้นใช้งาน</button>
    </div>
  </div>
</template>

<script>
// For Nuxt 2 Options API, import useRouter if using directly in setup.
// If using Options API style, this is how you'd access router.
export default {
  name: 'WelcomePage',
  methods: {
    goToHome() {
      this.$router.push({ name: 'index' }); // Nuxt automatically names the root page 'index'
    }
  }
}
</script>

<style scoped>
.welcome-container {
  background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%);
}

.welcome-card {
  background: #fff;
  padding: 2.5rem 2rem;
  border-radius: 1.5rem;
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.12);
  text-align: center;
  max-width: 400px;
  width: 100%;
}

h1 {
  font-size: 2rem;
  font-weight: 700;
  color: #2d3748;
  margin-bottom: 1rem;
  letter-spacing: 1px;
}

p {
  color: #4a5568;
  font-size: 1.1rem;
  margin-bottom: 2rem;
  line-height: 1.6;
}

.start-btn {
  background: linear-gradient(90deg, #667eea 0%, #5a67d8 100%);
  color: #fff;
  border: none;
  padding: 0.75rem 2rem;
  border-radius: 2rem;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.2s;
}

.start-btn:hover {
  background: linear-gradient(90deg, #5a67d8 0%, #667eea 100%);
}

/* If you want to include the logo, uncomment this and the img tag in template */
/* .vuetify-logo {
  height: 120px;
  width: 120px;
  transform: rotateY(560deg);
  animation: turn 3.5s ease-out forwards 1s;
  margin-bottom: 1rem;
}

@keyframes turn {
  100% {
    transform: rotateY(0deg);
  }
} */
</style>