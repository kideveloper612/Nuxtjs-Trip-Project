<template>
    <!-- BEGIN ARTICLES -->
    <div class="col-xl-9 col-lg-9 col-12 ml-auto category-content">
        <div class="row">
            <TripsSearchbar />

            <TripsCategories />

            <!-- BEGIN ARTICLES BLOCK -->
            <!-- TODO: Add link to every element -->
            <div class="col-xl-12">
                <div class="row">
                    <div class="article-grid"
                         v-masonry
                         transition-duration="0.3s"
                         item-selector=".grid-item"
                         column-width="1"
                         gutter="0">
                        <Trip v-for="(trip, index) in trips"
                              v-if="index < 12"
                              v-masonry-tile
                              :trip="trip"
                              key="trip.id"/>
                        <!-- MORE LINK -->
                        <div class="grid-item">
                            <a href="#" class="grid-item__btn btn-blue">More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ARTICLES BLOCK -->
        </div>
    </div>
    <!-- END ARTICLES -->
</template>

<script>
  import TripsSearchbar from '~/components/Category/TripsSearchbar.vue'
  import TripsCategories from '~/components/Category/TripsCategories.vue'
  import Trip from '~/components/Category/Trip.vue'

  export default {
    props: ['trips'],
    components: {
      TripsSearchbar,
      TripsCategories,
      Trip
    },
  }
</script>
