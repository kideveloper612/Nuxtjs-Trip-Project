<template>
    <div>

        <Banner :background="'/images/sok-head-bg.png'"
                title="Sista minuten"
                subtitle="Resor med kort varsel till rabatterade priser." />

        <div class="container-fluid top-section">
            <div class="col-xl-10 col-12 mx-auto">
                <div class="row">
                    <Sidebar />

                    <!-- BEGIN AVAILABLE POSITIONS CONTENT -->
                    <div class="col-xxl-10 col-xl-9 col-lg-9 col-12">
                        <div class="content-padding-top">
                            <Trip v-for="(trip, index) in trips"
                                  v-if="(index < resultsInPage) && (index >= (resultsInPage - 10))"
                                  :key="index"
                                  :trip="trip"/>

                            <!--<div class="searchresult-navi">-->
                                <!--<button v-if="resultsInPage > 10" @click="resultsInPage = resultsInPage - 10" class="btn-blue"><< Previous</button>-->
                                <!--<button v-if="resultsInPage < results.length" @click="resultsInPage = resultsInPage + 10" class="btn-blue">Next >></button>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <!-- END AVAILABLE POSITIONS CONTENT -->

                </div>
            </div>
        </div>

    </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  import axios from 'axios'
  import Sidebar from '~/components/Sidebar.vue'
  import Banner from '~/components/Banner.vue'
  import Trip from  '~/components/LastMinute/Trip.vue'

  export default {
    head () {
      return {
        title: 'Sök: ' + this.searchphrase + process.env.metaTitleSuffix,
      }
    },
    asyncData ({ params, error, store }) {
      return Promise.all([
        store.dispatch("fetchUpcomingTriplist", 'lastminute'),
      ])
    },
    components: {
      Sidebar,
      Banner,
      Trip
    },
    data() {
      return {
        resultsInPage: 10
      }
    },
    computed: {
      ...mapGetters({
        trips: 'getUpcomingTriplist'
      })
    }
  }
</script>

<style lang="scss" scoped>
    .searchresult-navi {
        display: flex;
        justify-content: center;
        margin: 10px 0;

        button {
            margin: 5px;
            padding: 5px 20px;
        }
    }
</style>
