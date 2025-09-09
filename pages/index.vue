<template>
  <div class="page-container">
    <div class="content-card">
      <h1 class="main-title">RAGNA SHOP</h1>
      <p class="subtitle">
        บริการขายของต่างๆ ครบวงจร
      </p>
      <div class="button-group">
        <NuxtLink to="/register" class="action-btn primary">
          สมัครสมาชิก
        </NuxtLink>
        <NuxtLink to="/login" class="action-btn secondary">
          เข้าสู่ระบบ
        </NuxtLink>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HomePage'
}
</script>

<style scoped>
.page-container {
  min-height: calc(100vh - 60px);
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  text-align: center;
  padding: 20px;
}

.content-card {
  background: #fff;
  padding: 3rem 2.5rem;
  border-radius: 1.5rem;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
  max-width: 550px;
  width: 100%;
}

.main-title {
  font-size: 3rem;
  font-weight: bold;
  background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  margin-bottom: 1rem;
}

.subtitle {
  font-size: 1.2rem;
  color: #555;
  line-height: 1.6;
  margin-bottom: 2.5rem;
}

.button-group {
  display: flex;
  justify-content: center;
  gap: 1rem;
}

.action-btn {
  display: inline-block;
  color: #fff;
  border: none;
  padding: 0.9rem 2.5rem;
  border-radius: 50px;
  font-size: 1.1rem;
  font-weight: 500;
  cursor: pointer;
  text-decoration: none;
  transition: all 0.2s;
}

.action-btn.primary {
  background: linear-gradient(90deg, #007bff 0%, #0056b3 100%);
}

.action-btn.primary:hover {
  background: linear-gradient(90deg, #0056b3 0%, #007bff 100%);
  box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
}

.action-btn.secondary {
  background: #6c757d;
}

.action-btn.secondary:hover {
  background: #5a6268;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}
</style>