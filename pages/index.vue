<template>
  <div class="page-container">
    <div class="content-card">
      <h1 style="background: linear-gradient(90deg, #6dd5ed 0%, #2193b0 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
        RAGNA SHOP
      </h1>
      <p>
        [บริการขายของต่างๆ]<br />
        
      </p>
      <NuxtLink to="/register" class="action-btn">
        สมัครสมาชิก
            </NuxtLink>
            <NuxtLink to="/login" class="action-btn" style="margin-left: 1rem;">
        เข้าสู่ระบบ
      </NuxtLink>
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
  min-height: calc(100vh - 60px); /* Adjust height for navbar */
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(135deg, #ffffff 0%, #ffffff 100%);
  padding: 20px;
  text-align: center;
}

.content-card {
  background: #fff;
  padding: 3rem 2.5rem;
  border-radius: 1.5rem;
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
  max-width: 500px;
  width: 100%;
}

h1 {
  font-size: 2.5rem;
  color: #333;
  margin-bottom: 1.5rem;
}

p {
  font-size: 1.1rem;
  color: #555;
  line-height: 1.6;
  margin-bottom: 2rem;
}

.action-btn {
  display: inline-block;
  background: linear-gradient(90deg, #6dd5ed 0%, #2193b0 100%);
  color: #fff;
  border: none;
  padding: 0.8rem 2rem;
  border-radius: 2rem;
  font-size: 1.1rem;
  font-weight: bold;
  cursor: pointer;
  text-decoration: none;
  transition: background 0.3s ease;
}

.action-btn:hover {
  background: linear-gradient(90deg, #2193b0 0%, #6dd5ed 100%);
}
</style>