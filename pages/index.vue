<template>
    <div>
        <!-- BEGIN HEADER BG -->
        <div class="main-head-bg page-title"></div>
        <!-- END HEADER BG -->
        <!-- BEGIN ARTICLES & SIDE MENU -->
        <div class="container-fluid top-section">
            <div class="row">
                <div class="col-xl-10 col-12 mx-auto">
                    <!-- BEGIN NEWS BLOCK -->
                    <div class="blue-container header-news flex-column">
                        <h4>Italien - mat & vin</h4>
                        <h5>En smak av Emilia Romagna</h5>
                        <p>Regionen Emilia-Romagna i norra Italien är känd för sin matkultur. Här finns flera
                            intressanta vinområden och
                            historiska…</p>
                        <a href="#" class="header-news-btn d-flex align-self-end text-uppercase">Läs mer<i
                                class="icon-arrow-right"></i></a>
                    </div>
                    <!-- END NEWS BLOCK -->
                    <div class="row">
                        <!-- BEGIN SIDE MENU -->
                        <Sidebar/>
                        <!-- END SIDE MENU -->
                        <!-- BEGIN ARTICLES -->
                        <Trips />
                        <!-- END ARTICLES -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END ARTICLES & SIDE MENU -->


        <Calendar />

        <!-- BEGIN INSTAGRAM SECTION -->
        <div class="container-fluid instagram-wrap">
            <div class="row">
                <div class="col-12">
                    <div class="instagram-title text-center">
                        <h2>Follow us on Instagram</h2>
                        <h4>and post images with hashtag #rolfbuss</h4>
                    </div>
                    <div class="instagram-slider d-none d-md-block">
                        <!--<div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>-->
                        <!--<div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>-->
                    </div>
                    <!-- Mobile slider -->
                    <div class="instagram-slider__mobile d-block d-md-none">
                        <!--<div class="instagram-slider-slide"><img src="images/slider-pic-1.png" alt=""></div>-->
                        <!--<div class="instagram-slider-slide"><img src="images/slider-pic-2.png" alt=""></div>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- END INSTAGRAM SECTION -->

        <!-- BEGIN STAY WITH US -->
        <div class="container stay-with-us">
            <div class="row">
                <div class="col">
                    <h2>Stay with us</h2>
                    <h3>and do not miss the important</h3>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <a href="#" class="stay-with-us-facebook stay-with-us-social"><i class="icon-fb"></i></a>
                <a href="#" class="stay-with-us-youtube stay-with-us-social"><i class="icon-youtube"></i></a>
                <a href="#" class="stay-with-us-instagram stay-with-us-social"><i class="icon-instagram"></i></a>
                <a href="#" class="stay-with-us-pinterest stay-with-us-social"><i class="icon-pinterest"></i></a>
            </div>
        </div>
        <!-- BEGIN STAY WITH US -->


    </div>
</template>

<script>
  import Sidebar from '@/components/Sidebar.vue';
  import Trips from '@/components/StartComponents/Trips.vue';
  import Calendar from '@/components/StartComponents/Calendar.vue';

  export default {
    head () {
      return {
        title: 'Bussresor och flyg' + process.env.metaTitleSuffix,
      }
    },
    asyncData({ store }) {
      return Promise.all([
        store.dispatch("fetchCategoryStart"),
        store.dispatch("fetchCalendar"),
      ])
    },
    components: {
      Sidebar,
      Trips,
      Calendar
    }
  }
</script>

<style>

</style>
