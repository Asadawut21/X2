<template>
  <v-app dark>
    <v-app-bar
      app
      color="primary"
      dark
      class="custom-app-bar"
      height="80px"
    >
      <img src="/xx2.png" alt="RAGNA SHOP Logo" class="site-logo" @click="$router.push('/')" />

      <v-toolbar-title class="text-h5 font-weight-bold">RAGNA SHOP</v-toolbar-title>

      <v-spacer />

      <v-btn
        v-for="(item, i) in items"
        :key="i"
        :to="item.to"
        text
        router
        class="mx-2"
      >
        <v-icon left>{{ item.icon }}</v-icon>
        {{ item.title }}
      </v-btn>

    </v-app-bar>

    <v-main>
      <v-container fluid class="main-content-container">
        <nuxt />
      </v-container>
    </v-main>

    <v-navigation-drawer
      v-model="rightDrawer"
      :right="right"
      temporary
      fixed
      class="custom-drawer"
    >
      <v-list>
        <v-list-item @click.native="right = !right">
          <v-list-item-action>
            <v-icon light>mdi-repeat</v-icon>
          </v-list-item-action>
          <v-list-item-title>Switch drawer (click me)</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-footer :fixed="fixed" app class="custom-footer">
      <span>&copy; {{ new Date().getFullYear() }}</span>
      <v-spacer />
      <span>Powered by Vuetify & Nuxt.js</span>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  data () {
    return {
      rightDrawer: false,
      right: true,
      fixed: true,
      items: [
        { icon: 'mdi-home', title: 'หน้าหลัก', to: '/' },
        { icon: 'mdi-shopping', title: 'สินค้า', to: '/product' },
        { icon: 'mdi-account-plus', title: 'สมัครสมาชิก', to: '/register' },
        { icon: 'mdi-login', title: 'ล็อคอิน', to: '/login' },
        { icon: 'mdi-contact', title: 'ติดต่อเรา', to: '/contact' },
      ]
    }
  }
}
</script>

<style>
.v-application {
  background-image: url('/xx4.png') !important;
  background-size: cover !important;
  background-position: center !important;
  background-attachment: fixed !important;
}

html, body, #__nuxt, #__layout {
  height: 100%;
  margin: 0;
  padding: 0;
}

.main-content-container {
  min-height: calc(100vh - 80px - 48px);
  background-color: transparent !important;
  padding: 20px !important;
}

.custom-app-bar.v-app-bar {
  height: 80px !important;
}

.custom-app-bar .v-toolbar__content {
  height: 80px !important;
  padding: 0 16px;
  align-items: center;
}

.site-logo {
  height: 70px !important;
  width: auto !important;
  margin-right: 16px;
  cursor: pointer;
  flex: 0 0 auto;
}

.custom-drawer {
  background-color: #212121 !important;
}

.custom-footer {
  background-color: #212121 !important;
  color: rgba(255, 255, 255, 0.7) !important;
  font-size: 0.85rem;
  padding: 0.5rem 1rem !important;
}
</style>