<template>
  <div>
    <!-- BEGIN HEADER BG -->
    <Banner
      :title="trip.title"
      :subtitle="trip.subtitle"
      :background="trip.main_picture_1"
      :days="days"
      :price="trip.price_min"
      :currency="trip.currency"
      :reviews="trip.reviews_average"
    />
    <!-- END HEADER BG -->

    <!-- BEGIN ARTICLES & SIDE MENU -->
    <div class="container-fluid top-section">
      <div class="row">
        <div class="col-xl-10 col-12 mx-auto">
          <div class="row">
            <Sidebar />

            <!-- BEGIN PRODUCT CONTENT -->
            <div class="col-xl-9 col-lg-9 col-12 ml-auto product-padding-top product-content">
              <div class="row">
                <!-- Nav tabs -->
                <NavTabs @changeTab="changeTab" :sections="trip.sections" />

                <!-- Tab panes -->
                <div class="tab-content col-xl-12">
                  <DescriptionTab
                    :class="[ activeTab === 'descr' ? 'active' : '' ]"
                    :trip="trip"
                    :mainItinerary="itineraryMain"
                    :latestReviews="latestReviews"
                  />
                  <DetailsTab
                    :class="[ activeTab === 'details' ? 'active' : '' ]"
                    :itinerary="itineraryArr"
                  />
                  <TestimonialsTab
                    :class="[ activeTab === 'testimonials' ? 'active' : '' ]"
                    :reviews-average="trip.reviews_average"
                    :reviews="reviews"
                    :ratings-chart="ratingsChart"
                  />
                  <VideoTab :class="[ activeTab === 'video' ? 'active' : '' ]" />
                  <HotelsTab :class="[ activeTab === 'hotels-list' ? 'active' : '' ]" />
                  <Departures
                    :calendar="calendar"
                    :flight-trip="trip.flight_trip"
                    :avalibleAirports="trip.avalible_airports"
                  />
                  <Suggested :suggested="suggested" />
                </div>
              </div>
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
import axios from "axios";
import { mapGetters } from "vuex";

import Sidebar from "@/components/Sidebar.vue";
import Banner from "@/components/Trip/Banner.vue";
import NavTabs from "@/components/Trip/NavTabs.vue";
import DescriptionTab from "@/components/Trip/DescriptionTab.vue";
import DetailsTab from "@/components/Trip/DetailsTab.vue";
import TestimonialsTab from "@/components/Trip/TestimonialsTab.vue";
import VideoTab from "@/components/Trip/VideoTab.vue";
import HotelsTab from "@/components/Trip/HotelsTab.vue";
import Departures from "@/components/Trip/Departures.vue";
import Suggested from "@/components/Trip/Suggested.vue";

export default {
  head() {
    return {
      title: this.trip.html_title + process.env.metaTitleSuffix
    };
  },
  asyncData({ params, error, store }) {
    return axios
      .get("/triptype?url=" + params.triptype + "/" + params.slug)
      .then(res => {
        if (res.data.error) {
          error({ statusCode: 404, message: "Trip not found" });
        }
        return Promise.all([
          store.dispatch("fetchItinerary", res.data.id),
          store.dispatch("fetchReviewsForTriptype", res.data.id),
          store.dispatch("fetchSuggestedTriptypes", res.data.id),
          store.dispatch("fetchRatingsChart", res.data.id),
          store.dispatch("fetchCalendar", {
            triptypeid: res.data.id,
            pgamount: 8
          })
        ]).then(() => {
          return {
            trip: res.data
          };
        });
      })
      .catch(e => {
        error({ statusCode: 404, message: "Post not found" });
      });
  },
  components: {
    Sidebar,
    Banner,
    NavTabs,
    DescriptionTab,
    DetailsTab,
    TestimonialsTab,
    VideoTab,
    HotelsTab,
    Departures,
    Suggested
  },
  computed: {
    days() {
      const days_min = this.trip.days_min,
        days_max = this.trip.days_max;

      return days_min === days_max ? days_min : days_min + " - " + days_max;
    },
    itineraryArr() {
      if (!this.itinerary) {
        return false;
      }
      return Object.keys(this.itinerary).map(i => this.itinerary[i]);
    },
    itineraryMain() {
      return this.itineraryArr.find(obj => obj.mainitinerary === true);
    },
    mainItinerary() {
      if (!this.itinerary) {
        return false;
      }
      const itinerariesArr = Object.keys(this.itinerary).map(
        i => this.itinerary[i]
      );
      return itinerariesArr.find(obj => obj.mainitinerary === true);
    },
    latestReviews() {
      if (!this.trip.reviews_samples) {
        return false;
      }
      let latestReviewsArr = [];
      if (this.trip.reviews_samples[0]) {
        latestReviewsArr.push(this.reviews[0]);
      }
      if (this.trip.reviews_samples[1]) {
        latestReviewsArr.push(this.reviews[1]);
      }
      return latestReviewsArr;
    },
    ...mapGetters({
      itinerary: "getItinerary",
      reviews: "getReviewsForTriptype",
      suggested: "getSuggestedTriptypes",
      ratingsChart: "getRatingsChart",
      calendar: "getCalendar"
    })
  },
  data() {
    return {
      activeTab: "descr"
    };
  },
  methods: {
    changeTab(tab) {
      this.activeTab = tab;
    }
  }
};
</script>
