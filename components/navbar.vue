<template>
  <nav class="navbar">
    <div class="navbar-brand">
      <NuxtLink to="/" class="navbar-item brand-logo">
        My Nuxt App
      </NuxtLink>
    </div>
    <div class="navbar-menu">
      <div class="navbar-start">
        <NuxtLink to="/" class="navbar-item">
          หน้าหลัก
        </NuxtLink>
        <NuxtLink to="/welcome" class="navbar-item">
          ยินดีต้อนรับ
        </NuxtLink>
      </div>
      <div class="navbar-end">
        <NuxtLink to="/register" class="navbar-item button is-primary">
          <strong>สมัครสมาชิก</strong>
        </NuxtLink>
        <NuxtLink to="/login" class="navbar-item button is-light">
          เข้าสู่ระบบ
        </NuxtLink>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'AppNavbar'
  // NuxtLink is globally available in Nuxt 2, no import needed here.
}
</script>

<style scoped>
.navbar {
  background-color: #ffffff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 1rem 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: sticky;
  top: 0;
  z-index: 1000;
  height: 60px; /* Fixed height for navbar */
}

.navbar-brand .brand-logo {
  font-size: 1.5rem;
  font-weight: bold;
  color: #333;
  text-decoration: none;
}

.navbar-menu {
  display: flex;
  flex-grow: 1;
  justify-content: space-between;
  align-items: center;
}

.navbar-start,
.navbar-end {
  display: flex;
  align-items: center;
}

.navbar-item {
  padding: 0.5rem 1rem;
  color: #555;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s, background-color 0.2s;
  border-radius: 4px;
}

.navbar-item:hover {
  color: #007bff;
  background-color: #f0f0f0;
}

.navbar-end .button {
  margin-left: 0.75rem;
  padding: 0.6rem 1.2rem;
  border-radius: 25px;
  font-weight: 600;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

.navbar-end .button.is-primary {
  background-color: #007bff;
  color: #fff;
  border: 1px solid #007bff;
}

.navbar-end .button.is-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}

.navbar-end .button.is-light {
  background-color: #f8f9fa;
  color: #007bff;
  border: 1px solid #007bff;
}

.navbar-end .button.is-light:hover {
  background-color: #e2e6ea;
  color: #0056b3;
}
</style>