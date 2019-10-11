<template>
    <div>
        <Banner :background="'/images/ansultning-head-bg.jpg'"
                :title="header"/>

        <!-- BEGIN AVAILABLE POSITIONS CONTENT & SIDE MENU -->
        <div class="container-fluid top-section">
            <div class="row">
                <div class="col-xl-10 col-12 mx-auto">
                    <div class="row">

                        <!-- BEGIN SIDE MENU -->
                        <Sidebar/>
                        <!-- END SIDE MENU -->

                        <!-- BEGIN AVAILABLE POSITIONS CONTENT -->
                        <div class="col-xxl-10 col-xl-9 col-lg-9 col-12 ml-auto content-padding-top ansultning-content">
                            <div class="row">
                                <!-- BEGIN Content -->
                                <div class="col-12 ansultning-content__section"
                                     v-html="data"></div>
                                <!-- END Content -->
                            </div>
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

  export default {
    asyncData ({ params, error, store }) {
      return axios.get('/dagprogram/'+params.slug)
        .then((res) => {
          if(res.data.error) {
            error({ statusCode: 404, message: 'Post not found' })
          }
          return {
            data: res.data.html,
            header: res.data.tripname
          }
        })
        .catch((e) => {
          error({ statusCode: 404, message: 'Post not found' })
        })
    },
    components: {
      Sidebar,
      Banner
    }
  }
</script>

<style>

</style>
