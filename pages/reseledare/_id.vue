<template>
    <div>
        <Banner :background="'/images/reseledare-head-bg.png'"
                :title="data.name"
                subtitle="Reseledare"/>


        <!-- BEGIN AVAILABLE POSITIONS CONTENT & SIDE MENU -->
        <div class="container-fluid top-section">
            <div class="row">
                <div class="col-xl-10 col-12 mx-auto">
                    <div class="row">

                        <!-- BEGIN SIDE MENU -->
                        <Sidebar />
                        <!-- END SIDE MENU -->

                        <!-- BEGIN AVAILABLE POSITIONS CONTENT -->
                        <div class="col-xxl-10 col-xl-9 col-lg-9 col-12 ml-auto content-padding-top ansultning-content">
                            <div class="row staff-content__row">
                                <!-- BEGIN Content -->
                                <div class="staff-content"
                                     :class="(data.picture ? 'col-xl-9 col-lg-8 staff-content__with-image' : 'col-md-12')">
                                    <div class="staff-description">
                                        {{ data.info }}
                                    </div>
                                    <Calendar :name="data.name" />
                                </div>
                                <div v-if="data.picture"
                                     class="col-xl-3 col-lg-4">
                                    <img :src="data.picture" />
                                </div>
                                <!-- END Content -->
                            </div>
                            <Reviews :name="data.name" />
                        </div>
                        <!-- END AVAILABLE POSITIONS CONTENT -->

                    </div>
                </div>
            </div>
        </div>
        <!-- END AVAILABLE POSITIONS CONTENT & SIDE MENU -->

    </div>
</template>

<script>
  import axios from 'axios'
  import Sidebar from '~/components/Sidebar.vue'
  import Banner from '~/components/Banner.vue'
  import Calendar from '~/components/Staff/Calendar.vue'
  import Reviews from '~/components/Staff/Reviews.vue'

  export default {
    asyncData ({ params, error, store }) {
      return axios.get('/staff/'+params.id)
        .then((res) => {
          if(res.data.error) {
            error({ statusCode: 404, message: 'Post not found' })
          }
          return Promise.all([
            store.dispatch("fetchCalendar", {staffid: params.id}),
            // store.dispatch("fetchReviewsForTourleader", params.id)
          ]).then(() => {
            return {
              data: res.data,
            }
          })
        })
        .catch((e) => {
          error({ statusCode: 404, message: 'Post not found' })
        })
    },
    components: {
      Sidebar,
      Banner,
      Calendar,
      Reviews
    }
  }
</script>

<style>

</style>
