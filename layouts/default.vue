<template>
  <v-app dark>
    <v-navigation-drawer
      v-model="drawer"
      :mini-variant="miniVariant"
      :clipped="clipped"
      fixed
      app
      class="custom-drawer"
    >
      <v-list dense nav>
        <v-list-item class="brand-title">
          <v-list-item-content>
            <v-list-item-title class="text-h6">
              My Nuxt App
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-divider class="my-2"></v-divider>

        <v-list-item
          v-for="(item, i) in items"
          :key="i"
          :to="item.to"
          router
          exact
          class="custom-list-item"
        >
          <v-list-item-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title v-text="item.title" />
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      :clipped-left="clipped"
      fixed
      app
      color="primary"
      dark
      class="custom-app-bar"
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      
      <v-btn
        icon
        @click.stop="miniVariant = !miniVariant"
        aria-label="Toggle mini variant"
      >
        <v-icon>mdi-{{ `chevron-${miniVariant ? 'right' : 'left'}` }}</v-icon>
      </v-btn>
      
      <v-btn
        icon
        @click.stop="clipped = !clipped"
        aria-label="Toggle clipped"
      >
        <v-icon>mdi-application</v-icon>
      </v-btn>
      
      <v-btn
        icon
        @click.stop="fixed = !fixed"
        aria-label="Toggle footer fixed"
      >
        <v-icon>mdi-minus</v-icon>
      </v-btn>

      <v-toolbar-title v-text="title" class="text-h5 font-weight-bold" />
      <v-spacer />
      
      <v-btn
        icon
        @click.stop="rightDrawer = !rightDrawer"
        aria-label="Open right drawer"
      >
        <v-icon>mdi-cog</v-icon> </v-btn>
    </v-app-bar>

    <v-main>
      <v-container fluid class="main-content-container">
        <nuxt /> </v-container>
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
            <v-icon light>
              mdi-repeat
            </v-icon>
          </v-list-item-action>
          <v-list-item-title>Switch drawer (click me)</v-list-item-title>
        </v-list-item>
        </v-list>
    </v-navigation-drawer>

    <v-footer
      :fixed="fixed"
      app
      class="custom-footer"
    >
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
      clipped: false, // กำหนดว่า App Bar จะถูก clipped โดย Drawer หรือไม่
      drawer: false,  // สถานะของ Navigation Drawer ด้านซ้าย (เปิด/ปิด)
      fixed: false,   // กำหนดว่า Footer จะ fixed อยู่ที่ด้านล่างหรือไม่
      items: [
        {
          icon: 'mdi-home', // ไอคอนบ้านสำหรับหน้าหลัก
          title: 'หน้าหลัก',
          to: '/'
        },
        {
          icon: 'mdi-shopping', // ไอคอนสำหรับหน้าสินค้า
          title: 'สินค้า',
          to: '/product'
        },
        {
          icon: 'mdi-account-plus', // ไอคอนสำหรับหน้าสมัครสมาชิก
          title: 'สมัครสมาชิก',
          to: '/register'
        },
        {
          icon: 'mdi-hand-wave', // ไอคอนสำหรับหน้าต้อนรับ
          title: 'หน้าต้อนรับ',
          to: '/welcome'
        }
      ],
      miniVariant: false, // กำหนดว่า Drawer จะเป็นแบบ mini (ไอคอนอย่างเดียว) หรือไม่
      right: true,      // กำหนดว่า Drawer ด้านขวาจะอยู่ทางขวา
      rightDrawer: false, // สถานะของ Navigation Drawer ด้านขวา (เปิด/ปิด)
      title: 'เว็บแอปของฉัน' // ชื่อที่แสดงบน App Bar
    }
  }
}
</script>

<style>
/* Global Styles (สไตล์ที่ใช้ทั่วทั้งแอป) */
html, body, #__nuxt, #__layout, .v-application {
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden; /* ป้องกัน scrollbar ซ้อนกัน */
}

/* ปรับปรุงพื้นหลังของเนื้อหาหลัก */
.main-content-container {
  min-height: calc(100vh - 64px - 48px); /* 100vh - (App Bar height) - (Footer height) */
  background-color: #121212; /* สีพื้นหลังหลักสำหรับ Dark theme */
  padding: 20px !important; /* !important เพื่อให้แน่ใจว่าถูก override */
}

/* สไตล์เพิ่มเติมสำหรับ Navbar และ Drawer */
.custom-app-bar {
  border-bottom: 1px solid rgba(255, 255, 255, 0.12) !important; /* เส้นแบ่งใต้ App Bar */
}

.custom-drawer {
  background-color: #212121 !important; /* สีพื้นหลัง Drawer */
  box-shadow: 3px 0 6px rgba(0, 0, 0, 0.2); /* เพิ่มเงาให้ Drawer */
}

.custom-drawer .brand-title {
  padding: 16px;
  color: #BB86FC; /* สีม่วงอ่อนสำหรับชื่อแบรนด์ */
  font-weight: bold;
}

.custom-list-item .v-list-item__title {
  font-weight: 500;
  font-size: 1rem;
}

.custom-list-item.v-list-item--active {
  background-color: rgba(187, 134, 252, 0.15) !important; /* สีพื้นหลังเมื่อเลือกเมนู */
  color: #BB86FC !important; /* สีข้อความเมื่อเลือกเมนู */
}

.custom-list-item.v-list-item--active .v-icon {
  color: #BB86FC !important; /* สีไอคอนเมื่อเลือกเมนู */
}

.custom-list-item:hover {
  background-color: rgba(255, 255, 255, 0.08) !important; /* สีพื้นหลังเมื่อ hover */
}

/* สไตล์สำหรับ Footer */
.custom-footer {
  background-color: #212121 !important; /* สีพื้นหลัง Footer */
  color: rgba(255, 255, 255, 0.7) !important;
  font-size: 0.85rem;
  padding: 0.5rem 1rem !important;
}
</style>