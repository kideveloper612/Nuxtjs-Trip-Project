<template>
    <!-- ARTICLE -->
    <div class="grid-item">
        <article class="article-block">
            <a href="#">
                <div class="article-block-img d-flex flex-column"
                     :style="{'background-image': 'url(' + trip.main_picture_1 + ')' }">
                    <div class="article-block-price">Från {{ trip.price_min | priceFormat }}</div>
                    <span v-if="trip.reviews_average" class="article-block-star"><i class="icon-star"></i>{{ trip.reviews_average.avg }}</span>
                    <h5 class="article-block--title d-block d-md-none">{{ trip.title }}</h5>
                    <p class="article-block--subtitle mb-1 d-block d-md-none">{{ trip.subtitle }}</p>
                    <div class="d-flex d-md-none flex-row justify-content-start article-block--days">
                        <span class="mr-3">{{ trip.departures }} avgångar</span><span>{{ days }} dagar</span>
                    </div>
                </div>
                <aside class="article-block-footer d-none d-md-flex flex-column justify-content-start">
                    <div class="d-flex flex-column justify-content-start">
                        <h5 class="article-block--title">{{ trip.title }}</h5>
                        <p class="article-block--subtitle">{{ trip.subtitle }}</p>
                    </div>
                    <div class="d-flex flex-row justify-content-start">
                        <span class="mr-3">{{ trip.departures }} avgångar</span><span>{{ days }} dagar</span><span v-if="trip.reviews_average" class="ml-auto ml-lg-0"><i class="icon-star"></i>{{  trip.reviews_average.avg  }}</span>
                    </div>
                </aside>
            </a>
        </article>
    </div>
    <!-- END ARTICLE -->
</template>

<script>
    export default {
      props: ['trip'],
      computed: {
        days() {
          const days_min = this.trip.days_min,
            days_max = this.trip.days_max;

          return (days_min === days_max) ? days_min : days_min + ' - ' + days_max;
        }
      }
    }
</script>
