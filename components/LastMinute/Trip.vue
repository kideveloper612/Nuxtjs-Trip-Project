<template>
    <a :href="trip.url"><div class="lastminute-trip">
        <div class="lastminute-trip__content">
            <div class="lastminute-trip__content__headline">
                <h2>{{ trip.title }}</h2>
                <h3 v-if="trip.subtitle">{{ trip.subtitle }}</h3>
            </div>
            <p class="lastminute-trip__content__description"
               v-if="trip.short_preamble">{{ trip.short_preamble }}</p>
            <div class="lastminute-trip__details">
                <div class="lastminute-trip__details__item">
                    <img src="/icons/calendar.svg" alt="Date" />
                    {{ trip.date }}
                </div>
                <div class="lastminute-trip__details__item">
                    <img src="/icons/timeglass.svg" alt="Dagar" />
                    {{ trip.days }} dagar
                </div>
                <div  v-if="trip.reviews_average.avg" class="lastminute-trip__details__item">
                    <img src="/icons/star0.svg" alt="Reviews Average" />
                    {{ trip.reviews_average.avg }}
                </div>
            </div>
            <div class="lastminute-trip__details">
                <div v-if="trip.flighttrip"
                     class="lastminute-trip__details__item">
                    <img src="/icons/plane.svg" alt="Flygresa" />
                    Flygresa från {{ trip.airports_text }}
                </div>
                <div v-if="trip.bustrip"
                     class="lastminute-trip__details__item">
                    <img src="/icons/bus.svg" alt="Bussresa" />
                    Bussresa
                </div>
            </div>
        </div>
        <div class="lastminute-trip__thumb">
            <div class="lastminute-trip__thumb__img"
                 :style="[trip.picture ? {'background-image': 'url(' + trip.picture + ')'} : {}]">
                <div class="lastminute-trip__thumb__cost">{{ trip.price | priceFormat }}:-</div>
            </div>
        </div>
    </div>
    </a>
</template>

<script>
    export default {
        props: ['trip'],
        methods: {
        }
    }
</script>
