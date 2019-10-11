<template>
    <a :href="result.url"><div class="searchresult">
        <div class="searchresult__content">
            <div class="searchresult__content__headline">
                <h2>{{ result.title }}</h2>
                <h3 v-if="result.subtitle">{{ result.subtitle }}</h3>
            </div>
            <p class="searchresult__content__description"
               v-if="result.preamble">{{ result.preamble }}</p>
            <div class="searchresult__details">
                <div v-if="result.flight_trip"
                     class="searchresult__details__item">
                    <img src="/icons/plane.svg" alt="Flygresa" />
                    Flygresa
                </div>
                <div v-else
                     class="searchresult__details__item">
                    <img src="/icons/bus.svg" alt="Bussresa" />
                    Bussresa
                </div>
                <div  v-if="result.departures"
                      class="searchresult__details__item">
                    <img src="/icons/calendar.svg" alt="Avgångar" />
                    {{ result.departures }} avgångar
                </div>
                <div class="searchresult__details__item">
                    <img src="/icons/timeglass.svg" alt="Dagar" />
                    {{ days(result) }} dagar
                </div>
                <div v-if="result.reviews_average"
                     class="searchresult__details__item">
                    <img src="/icons/star0.svg" alt="Reviews average" />
                    {{ result.reviews_average.avg }}
                </div>
            </div>
        </div>

        <div class="searchresult__thumb">
            <div class="searchresult__thumb__img"
                 :style="[result.main_picture_1 ? {'background-image': 'url(' + result.main_picture_1 + ')'} : {}]">
                <div class="searchresult__thumb__cost">Från {{ result.price_min | priceFormat }}:-</div>
            </div>
        </div>
    </div>
    </a>
</template>

<script>
    export default {
        props: ['result'],
        methods: {
            days(result) {
                const days_min = result.days_min,
                    days_max = result.days_max;

                return (days_min === days_max) ? days_min : days_min + ' - ' + days_max;
            }
        }
    }
</script>
