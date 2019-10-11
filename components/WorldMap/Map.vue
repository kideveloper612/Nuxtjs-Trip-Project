<template>
    <div class="worldmap">
        <l-map
                class="worldmap__map"
                style="height: 80%; width: 100%"
                :zoom="zoom"
                :center="center"
                :options="{zoomControl: false}"
                @update:zoom="zoomUpdated"
                @update:center="centerUpdated"
                @update:bounds="boundsUpdated"
        >
            <l-control-zoom position="bottomright"></l-control-zoom>
            <l-tile-layer :url="url"></l-tile-layer>

            <l-marker
                    v-for="(item, index) in triptypes"
                    :key="index"
                    :lat-lng="[item.lat, item.long]"
                    :icon="getIcon(item.triptypeid)"
                    class="worldmap__marker"
                    @popupopen="loadPopupTrip(item.triptypeid)"
                    @popupclose="clearPopupTrip()"
            >
                <l-popup class="worldmap__popup">
                    <div class="worldmap__popup__col-left" v-if="triptypeReady">
                        <div class="worldmap__popup__thumb" :style="'background-image: url(' + triptype.main_picture_1_square + ')'">
                            <span class="worldmap__popup__thumb__price">Från {{ triptype.price_min | priceFormat }}</span>
                        </div>
                        <a class="worldmap__popup__more-btn" :href="triptype.url">LÄS MER OM RESAN</a>
                    </div>
                    <div class="worldmap__popup__col-right" v-if="triptypeReady">
                        <h5>{{ triptype.title }}</h5>
                        <p>{{ triptype.preamble | truncate(140, '...') }}</p>
                        <ul>
                            <li><img src="/icons/calendar.svg" alt="calendar">{{ triptype.departures }} avgångar</li>
                            <li><img src="/icons/timeglass.svg" alt="calendar">{{ days(triptype) }} dagar</li>
                        </ul>
                    </div>
                    {{ triptypeReady ? ' ' : '' }}
                </l-popup>
            </l-marker>

        </l-map>
    </div>
</template>

<script>
  import { mapGetters } from 'vuex'

  export default {
    props: ['triptypes'],
    components: {

    },
    data () {
      return {
        url: 'https://api.mapbox.com/styles/v1/asprro/ck1exjxun0qha1crxi55rujb4/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiYXNwcnJvIiwiYSI6ImNrMWV4NzEyeTA0NTUzYnJzd3RwZDMzanIifQ.lwMEL8LcWVPSbWIZaJXOrA',
        zoom: 1.2,
        center: [47.413220, -1.219482],
        bounds: null,
        triptypeReady: false,
        markerIcon: null,
        markerIconActive: null,
        activeMarker: null
      };
    },
    computed: {
      ...mapGetters({
        triptype: 'getTriptype'
      })
    },
    mounted() {
      this.markerIcon = new this.$LIcon({
        iconUrl: '/icons/marker.svg',
        iconSize: [29, 49],
        popupAnchor:  [0, -8],
      });
      this.markerIconActive = new this.$LIcon({
        iconUrl: '/icons/marker-active.svg',
        iconSize: [29, 49],
        popupAnchor:  [1, -24],
      })
    },
    methods: {
      getIcon(id) {
        if(id == this.activeMarker) {
          return this.markerIconActive;
        }
        return this.markerIcon;
      },
      zoomUpdated (zoom) {
        this.zoom = zoom;
      },
      centerUpdated (center) {
        this.center = center;
      },
      boundsUpdated (bounds) {
        this.bounds = bounds;
      },
      clearPopupTrip() {
        this.activeMarker = null;
        this.triptypeReady = false;
      },
      loadPopupTrip(id) {
        this.activeMarker = id;
        this.$store.dispatch("fetchTriptype", {id: id}).then(response => {
          this.triptypeReady = true;
        }, error => {
          this.triptypeReady = false;
        })
      },
      days(triptype) {
        const days_min = triptype.days_min,
          days_max = triptype.days_max;
        return (days_min === days_max) ? days_min : days_min + ' - ' + days_max;
      },
    }
  }

</script>
