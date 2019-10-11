<template>
    <!-- BEGIN BOOKING -->
    <div id="someId" class="container-fluid booking-wrap">
        <div class="row">
            <!-- BEGIN BOOKING TITLE -->
            <div class="col-xl-6 d-flex align-items-center justify-content-start justify-content-md-center flex-column text-center booking-title">
                <h3 class="booking-title-header">Bussresor och flygresor till hela världen</h3>
                <p class="booking-title-footer">Rolfs Flyg & Buss arrangerar gruppresor till hela världen. Vi fokuserar på kunniga
                    reseledare, väl valda hotell
                    och bra priser. Årligen reser närmare 100 000 resenärer på våra gruppresor. Nöjda kunder är återkommande kunder
                    är vårt koncept.</p>
            </div>
            <!-- END BOOKING TITLE -->
            <!-- BEGIN BOOKING CONTENT -->

            <div class="col-xl-6 booking-content">
                <div class="booking-content-items">
                    <CalendarTable :trips="trips" />
                </div>
                <nav class="booking-nav justify-content-center">
                    <a href="#" class="d-flex justify-content-start align-items-center"><span class="icon-arrow-left"></span>Tidigare</a>
                    <a href="#" class="d-flex justify-content-end align-items-center">Senare<span class="icon-arrow-right"></span></a>
                </nav>
            </div>

            <!-- END BOOKING CONTENT -->
        </div>
    </div>
    <!-- END BOOKING -->
</template>

<script>
    import {mapGetters} from "vuex";

    import CalendarTable from '@/components/StartComponents/CalendarTable.vue';

    export default {
      components: {
        CalendarTable
      },
      computed: {
        ...mapGetters({
          trips: "getCalendar"
        }),
      },
    }
</script>
