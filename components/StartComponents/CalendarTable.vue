<template>
    <div class="booking-table">
        <div v-for="(trip, index) in trips" v-if="index < 11" class="booking-table__row">
            <div class="booking-table__col">
                <span class="booking-content__date">{{ trip.date | moment("MM/DD") }}</span>
                <span class="booking-content__day">{{ trip.date | moment("ddd") | capitalize }}</span>
            </div>
            <div class="booking-table__col">
                <h3 class="booking-content__title text-truncate">{{ trip.tripname }}</h3>
            </div>
            <div class="booking-table__col">
                <span class="booking-content__price">fr {{ trip.price }}</span>
            </div>
            <div class="booking-table__col">
                <span class="booking-content__plats">{{ trip.seats_left }}</span>
                <a :href="trip.triptypeurl" class="booking-content__btn btn-blue text-uppercase">LÄS MER</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      props: ["trips"],
      mounted() {
      },
      methods: {

      }
    }
</script>
