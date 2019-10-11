<template>
    <div>
        <!-- BEGIN HEADER BG -->
        <Banner title="Världskarta"
                subtitle="Hitta ditt nästa resmål på kartan"
                background="/images/reseledare-head-bg.png" />
        <!-- END HEADER BG -->

        <!-- BEGIN ARTICLES & SIDE MENU -->
        <div class="container-fluid top-section">
            <div class="row">
                <div class="col-xl-10 col-12 mx-auto">
                    <div class="row">
                        <Sidebar/>

                        <!-- BEGIN PRODUCT CONTENT -->
                        <div class="col-xl-9 col-lg-9 col-12 ml-auto">
                            <Map :triptypes="triptypes" />
                        </div>
                        <!-- END PRODUCT CONTENT -->

                    </div>
                </div>
            </div>
        </div>
        <!-- END ARTICLES & SIDE MENU -->

    </div>
</template>

<script>
  import axios from 'axios'
  import { mapMutations } from 'vuex'

  import Sidebar from '@/components/Sidebar.vue'
  import Banner from '@/components/Banner.vue'
  import Map from '@/components/WorldMap/Map.vue'

  export default {
    asyncData ({ params, error, store }) {
      return axios.get('/triptypes-map')
        .then((res) => {
          if(res.data.error) {
            error({ statusCode: 404, message: 'Page not found' })
          }
          return {
            triptypes: res.data
          }
        })
        .catch((e) => {
          error({ statusCode: 404, message: 'Page not found' })
        })
    },
    data() {
      return {

      }
    },
    methods: {
      ...mapMutations(['setTriptypesMap'])
    },
    components: {
      Sidebar,
      Banner,
      Map,
    },
  }
</script>
