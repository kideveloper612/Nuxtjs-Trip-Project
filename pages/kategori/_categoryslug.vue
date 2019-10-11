<template>
    <div>
        <Banner :background-image="trips ? trips[0].main_picture_1 : ''"
                :title="categorySlug"
                :subtitle="preamble"
        />

        <!-- BEGIN ARTICLES & SIDE MENU -->
        <div class="container-fluid top-section">
            <div class="col-xl-10 col-12 mx-auto">
                <div class="row w-100">
                    <Sidebar />

                    <Trips :trips="trips"/>
                </div>
            </div>
        </div>
        <!-- END ARTICLES & SIDE MENU -->
        <!-- BEGIN MAP -->
        <div class="container-fluid product-map">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23505.6429868005!2d-74.01114115481872!3d40.71138233539344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z0J3RjNGOLdCZ0L7RgNC6LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1507883993525"
                                frameborder="0"
                                style="border:0"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAP -->
    </div>
</template>

<script>
  import axios from 'axios'
  import Sidebar from '~/components/Sidebar.vue'
  import Banner from '~/components/Category/Banner.vue'
  import Trips from '~/components/Category/Trips.vue'

  export default {
    asyncData ({ params, error, store }) {
      if(!params.categoryslug) {
        error({ statusCode: 404, message: 'Category not found' });
      }
      return axios.get('/category/'+params.categoryslug)
        .then((res) => {
          if(res.data.error) {
            error({ statusCode: 404, message: 'Category not found' });
          }
          return {
            categorySlug: params.categoryslug,
            preamble: res.data.preamble_html,
            trips: res.data.trips
          }
        })
        .catch((e) => {
          error({ statusCode: 404, message: 'Category not found' })
        })
    },
    components: {
      Sidebar,
      Banner,
      Trips
    }
  }
</script>
