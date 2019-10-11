<template>
  <!-- FOOTER BEGIN -->
  <footer class="footer container-fluid">
    <div class="row h-100">
      <div class="container h-100">
        <div class="row h-100">
          <!-- FOOTER MENU BEGIN -->
          <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">
            <div
              v-for="(column, columnIndex) in footer"
              :key="columnIndex"
              class="footer-menu d-inline-flex flex-column"
            >
              <h4 class="text-uppercase">{{ column.label }}</h4>
              <ul>
                <li v-for="(columnItem, columnItemIndex) in column.links" :key="columnItemIndex">
                  <a :href="columnItem.link">{{ columnItem.label }}</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- FOOTER MENU EOF -->
          <!-- SUBSCRIBE BEGIN -->
          <div class="col footer-subscribe d-none d-md-block">
            <h4 class="text-uppercase">subscribe</h4>
            <form action="/" class="d-flex flex-column">
              <label for="subscribe-email">
                <input id="subscribe-email" type="text" placeholder="Your E-mail" />
              </label>
              <input type="submit" value="subscribe" class="text-uppercase btn-orange" />
            </form>
          </div>
          <!-- SUBSCRIBE EOF -->
        </div>
      </div>
      <!-- COPYRIGHT BEGIN -->
      <div class="col-12 copyright d-flex justify-content-center w-100">
        <p class="copyright-mobile">
          Rolfs Flyg & Bussresor AB · Hjalmar Brantingsgatan 1 · 417 06 Göteborg · Telefon 031-550000 ·
          info@rolfsbuss.se
        </p>
      </div>
      <!-- COPYRIGHT EOF -->
    </div>
  </footer>
  <!-- FOOTER EOF -->
</template>

<script>
import { mapGetters } from "vuex";
export default {
  computed: {
    ...mapGetters({ footer: "getFooter" })
  }
};
</script>