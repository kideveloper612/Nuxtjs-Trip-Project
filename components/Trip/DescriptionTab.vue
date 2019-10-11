<template>
    <!-- BEGIN DESCRIPTION TAB -->
    <div class="tab-pane product-content__descr" id="descr" role="tabpanel">

            <div class="product-graybox" v-if="trip.departure_info">
                <img class="product-graybox__ico" src="/icons/clock.svg" alt="clock"/>
                <div>
                    <h3>Avgångstider</h3>
                    <p>{{ trip.departure_info }}</p>
                </div>
            </div>

            <div class="product-preamble">
                <div class="product-preamble__content">
                    <p>{{ trip.preamble }}</p>
                </div>
                <div class="product-preamble__thumb">
                    <!--<img src="images/new-york-product-img.png" alt="">-->
                </div>
            </div>

            <div v-if="mainItinerary.itinerary.length > 1" class="product-featured-itinerary">
                <ul class="two-columns">
                    <li v-for="item in mainItinerary.itinerary"
                        v-if="item.day !== 'x'">
                        <span>Dag {{ item.day }}</span>
                        <strong>{{ item.title }}</strong></li>
                </ul>
            </div>

            <div class="product-included">
                <ul>
                    <li v-for="item in included">{{ item }}</li>
                </ul>
                <div class="product-details-link">
                    <a href="#">Detaljerat dagprogram</a>
                </div>
            </div>

            <div v-if="trip.extras || trip.special_info || trip.currency" class="product-included-info">
                <div v-if="trip.extras"
                     class="product-included-info__item">
                    <div class="product-included-info__item__header">
                        <strong>Tillägg:</strong>
                    </div>
                    <div class="product-included-info__item__description">
                        {{ trip.extras }}
                    </div>
                </div>
                <div v-if="trip.special_info"
                     class="product-included-info__item">
                    <div class="product-included-info__item__header">
                        <strong>Speciellt:</strong>
                    </div>
                    <div class="product-included-info__item__description">
                        {{ trip.special_info }}
                    </div>
                </div>
                <div v-if="trip.currency"
                     class="product-included-info__item">
                    <div class="product-included-info__item__header">
                        <strong>Resevaluta:</strong>
                    </div>
                    <div class="product-included-info__item__description">
                        {{ trip.currency }}
                    </div>
                </div>
            </div>

            <div class="product-reviews"
                 v-if="trip.reviews_average">
                <div class="product-reviews__blocks">
                    <div class="product-reviews__block product-reviews__overview-block">
                        <h4>{{ trip.reviews_average.avg }}
                            <small> /5</small>
                        </h4>
                        <Stars :score="trip.reviews_average.avg"
                               classes="product-reviews__overview-stars"/>
                        <a href="#">{{ trip.reviews_average.count }} personer</a> ger den här resan helhetsomdömet {{
                        trip.reviews_average.avg }} av 5
                    </div>
                    <div class="product-reviews__block"
                         v-for="review in latestReviews">
                        <div class="product-reviews__review-top">
                            <Stars :score="review.rating"
                                   classes="product-reviews__stars"/>
                            <strong>{{review.rating}} / 5</strong>
                        </div>
                        {{ review.text }} <strong>{{ review.from }}</strong>
                    </div>
                </div>
                <div class="product-details-link">
                    <a href="#">Läs omdömen har</a>
                </div>
            </div>
    </div>
    <!-- END DESCRIPTION TAB -->
</template>

<script>
  import Stars from '@/components/General/Stars.vue'

  export default {
    props: ['trip', 'mainItinerary', 'latestReviews', 'suggested'],
    computed: {
      included() {
        return this.trip.included_in_trip.split(' · ');
      },
    },
    components: {
      Stars
    }
  }
</script>
