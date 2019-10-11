<template>
    <div class="col-xxl-2 col-xl-3 col-lg-3 d-none d-lg-block side-menu__wrap"
         id="side-menu"
         :class="(sideMenuActive ? 'mobile-side-menu__active' : '')">
        <div class="blue-container side-menu">
            <h5 class="text-uppercase text-right close-mob-menu d-lg-none">
                <button class="mobile-menu d-lg-none close-mob-menu__btn" @click="toggleSideMenuActive()">
                    <span class="d-inline-flex h-100 align-items-center">Close menu <i class="icon-cross"></i></span>
                </button>
            </h5>
            <h5 class="side-menu-title">
                <i class="icon-world"></i>
                <!--<a href="/karta">Världskarta</a>-->
                <nuxt-link :to="`/karta`">Världskarta</nuxt-link>
                <a href="#" class="mobile-menu-icon-link d-lg-none" id="menu__search-btn"><i
                        class="icon-search"></i></a>
                <a href="#" class="mobile-menu-icon-link d-lg-none mr-2"><i class="icon-info-circle"></i></a>
                <a href="#" class="mobile-menu-icon-link d-lg-none mr-2"><i class="icon-calendar-default"></i></a>
            </h5>
            <h5 class="side-menu-title">
                <i class="icon-star"></i>
                <a href="/sista-minuten-erbjudanden">Sista minuten</a>
            </h5>
            <form action="" class="mobile-search d-none">
                <label for="mobile-search">
                    <input type="text" placeholder="Search...">
                </label>
                <button class="mobile-search__close-btn fz-20" id="mobile-search__close"><i class="icon-cross"></i>
                </button>
            </form>

            <ul class="side-menu-section"
                v-for="triptypesGroup in triptypesSidebar">
                <li v-for="(triptypeGroupArray, triptypeGroupName) in triptypesGroup"
                    class="side-menu-dropdown"
                    :class="(activeSubmenu == triptypeGroupName ? 'active' : 'non')"
                    @click="activeSubmenu = triptypeGroupName"><a>{{ triptypeGroupName }}</a>
                    <ul class="side-menu-dropdown-list blue-container">
                        <a class="side-menu-dropdown-list__back"
                           id="menu__back-btn"
                           @click.stop="activeSubmenu = null">back</a>
                        <h5 class="text-uppercase close-mob-menu">
                            <button class="mobile-menu d-lg-none close-mob-menu__btn"
                                    @click.stop="activeSubmenu = null">
                                <span class="d-inline-flex h-100 align-items-center">Close menu <i
                                        class="icon-cross"></i></span>
                            </button>
                        </h5> 
                        <li v-for="trip in triptypeGroupArray"><!--<a :href="trip.url">{{ trip.tripname }}</a>--><nuxt-link :to="trip.url">{{ trip.tripname }}</nuxt-link></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</template>

<script>
  import { mapGetters, mapActions } from "vuex";

  export default {
    computed: {
      ...mapGetters({
        triptypesSidebar: "getTriptypesSidebar",
        sideMenuActive: "getSideMenuActive",
      }),
    },
    mounted(){
      // const body = window.document.getElementsByTagName("body")[0];
      // const that = this;
      // body.addEventListener('click', function(e){
      //   that.hideDropdownMenu(e);
      // });
    },
    data() {
      return {
        activeSubmenu: null
      }
    },
    watch:  {
      activeSubmenu: function(oldval, newval) {
        console.log('activesubmenuwatch', oldval, newval);
      }
    },
    methods: {
      ...mapActions(['toggleSideMenuActive']),
      testMethod(x) {
        this.activeSubmenu= null;
      }
      // activeSubmenu(triptypeGroupArray, triptypeGroupName) {
      //   console.log(triptypeGroupArray, triptypeGroupName);
      // },
      // showDropdownMenu(e) {
      //   var activeDropdowns = document.querySelectorAll(".side-menu-dropdown.active");
      //   [].forEach.call(activeDropdowns, function(el) {
      //     el.classList.remove("active");
      //   });
      //   e.target.parentNode.classList.add('active');
      // },
      // hideDropdownMenu(e){
      //   if(!e.target.classList.contains('side-menu-dropdown') && !e.target.parentNode.classList.contains('side-menu-dropdown')) {
      //     var activeDropdowns = document.querySelectorAll(".side-menu-dropdown.active");
      //     [].forEach.call(activeDropdowns, function(el) {
      //       el.classList.remove("active");
      //     });
      //   }
      // }
    }
  }
</script>
