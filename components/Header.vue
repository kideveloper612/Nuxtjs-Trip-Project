<template>
    <div class="container-fluid sticky-top header-nav__bg">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light header-nav" style="z-index: 10;">
                        <a href="/" class="navbar-brand"><img src="~assets/images/logo.png" alt=""></a>
                        <button class="mobile-menu mobile-btn d-lg-none" @click="toggleSideMenuActive()">menu</button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">

                                <li v-for="navItem in topNavbar"
                                    class="nav-item"
                                    :class="(navItem.submenu ? 'dropdown' : '')">
                                    <a class="nav-link"
                                       :class="(navItem.submenu ? 'dropdown-toggle' : '')"
                                       :href="navItem.link">{{ navItem.label }}<i v-if="navItem.submenu" class="icon-chevrondown"></i><span class="sr-only">(current)</span></a>
                                    <div v-if="navItem.submenu"
                                         class="dropdown-menu dropdown-menu-right">
                                        <Fragment v-for="(submenuItem, index) in navItem.submenu" :key="'submenu'+index">
                                            <div v-if="submenuItem.label === 'linebreak'" class="dropdown-divider"></div>
                                            <a v-else
                                               class="dropdown-item"
                                               :href="submenuItem.link">{{ submenuItem.label }}</a>
                                        </Fragment>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-nav-search-btn" v-on:click="showSearchform = !showSearchform"><i class="icon-search"></i></a>
                                </li>
                                <li>
                                    <form class="header-nav-search-form"
                                          :class="{ active: showSearchform }">
                                        <input type="text"
                                               placeholder="Search"
                                               v-model="searchPhrase"
                                               aria-label="Search">
                                        <button class="btn btn-outline-success my-2 my-sm-0"
                                                hidden=""
                                                type="submit"
                                                @click.stop.prevent="search()">Search</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapActions, mapGetters } from 'vuex';
    import { Fragment } from 'vue-fragment';

    export default {
      components: {
        Fragment
      },
      data() {
        return {
          showSearchform: false,
          searchPhrase: ''
        }
      },
      methods: {
        search() {
          this.$router.push("/sok/" + this.searchPhrase);
        },
        ...mapActions(['toggleSideMenuActive']),
      },
      computed: {
        ...mapGetters({
          topNavbar: 'getTopNavbar'
        })
      }
    }
</script>
