<template>
    <!-- BEGIN TESTIMONIALS TAB -->
    <div class="tab-pane product-content__testimonials" id="testimonials" role="tabpanel">

        <div class="product__testimonials-summary"
             v-if="reviewsAverage">
            <div class="product__testimonials-summary__overview">
                <h4>{{ reviewsAverage.avg }}
                    <small> /5</small>
                </h4>
                <Stars :score="reviewsAverage.avg"
                       classes="product__testimonials-summary__overview-stars"/>
                <a href="#">{{ reviewsAverage.count }} personer</a> ger den har resan helhetsomdomet {{ reviewsAverage.avg }} av 6
            </div>
            <div class="product__testimonials-summary__ratings-chart">
                <div class="product__testimonials-summary__ratings-item"
                     v-for="n in [1,2,3,4,5].reverse()">
                    {{ n }}
                    <div class="product__testimonials-summary__ratings-item__bar">
                        <div class="product__testimonials-summary__ratings-item__bar__score"
                             :style="{ width: percentWidthOfRatingBar(n)+'%' }"></div>
                    </div>
                    {{ ratingsChart[n] }}
                </div>
            </div>
        </div>

        <div class="product__testimonials">
            <div class="product__testimonials__item"
                 v-for="(review, index) in reviews"
                 v-if="(index < resultsInPage) && (index >= (resultsInPage - 10))">
                <Stars :score="review.rating"
                       classes="product__testimonials__stars"/>
                <div class="product__testimonials__content">
                    <div class="product__testimonials__details">
                        <strong>{{ review.from }}</strong>
                        <span>Deltog resan {{ review.date }}</span>
                    </div>
                    <div class="product__testimonials__comment">
                        <p>{{ review.text }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="product__testimonials__pagination">
            <button v-if="resultsInPage > 10" @click="resultsInPage = resultsInPage - 10" class="btn-blue"><< Previous</button>
            <button v-if="resultsInPage < reviews.length" @click="resultsInPage = resultsInPage + 10" class="btn-blue">Next >></button>
        </div>

    </div>
    <!-- END TESTIMONIALS TAB -->
</template>

<script>
    import Stars from '@/components/General/Stars.vue'

    export default {
      props: ['reviewsAverage', 'reviews', 'ratingsChart'],
      components: {
        Stars
      },
      data() {
        return {
          resultsInPage: 10
        }
      },
      methods: {
        percentWidthOfRatingBar(review) {
          return (this.ratingsChart[review] * 100) / this.reviewsAverage.count;
        }
      }
    }
</script>

<style lang="scss" scoped>
    .product__testimonials__pagination {
        display: flex;
        justify-content: center;
        margin: 10px 0;

        button {
            margin: 5px;
            padding: 5px 20px;

            &:active,
            &:hover {
                background: #004b9c;
            }
        }
    }
</style>
