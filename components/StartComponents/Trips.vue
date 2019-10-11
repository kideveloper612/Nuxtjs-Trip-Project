<template>
    <div class="col-xxl-10 col-xl-9 col-lg-9 col-12 ml-auto articles-content">
        <div class="row">
            <!-- BEGIN ARTICLES SEARCH -->
            <TripsSearchbar/>
            <!-- END ARTICLES SEARCH -->
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
                              :class="gridItemClass(index, trips.length)"
                              v-masonry-tile
                              :trip="trip"
                              key="trip.id"/>
                    </div>
                </div>
            </div>
            <!-- END ARTICLES BLOCK -->
        </div>
    </div>
</template>

<script>
  import {mapGetters} from "vuex";

  import Trip from '@/components/StartComponents/Trip.vue';
  import TripsSearchbar from '@/components/StartComponents/TripsSearchbar.vue';

  export default {
    computed: {
      ...mapGetters({
        trips: "getCategoryStart"
      }),
    },
    components: {
      Trip,
      TripsSearchbar
    },
    data() {
      return {
      }
    },
    methods: {
        gridItemClass(index, length) {
            if(index === 0 || index === 10) {
              return 'grid-item-width';
            }

            if(index === 4 && length > 7) {
                return 'grid-item-height';
            }

            if(index === 5 && length > 9) {
                return 'grid-item-height';
            }

            return false;
        }
    }
  }
</script>
