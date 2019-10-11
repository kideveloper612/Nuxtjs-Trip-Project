<template>
    <div class="page-title page-title__product"
         :style="{'background-image': 'url(' + background + ')' }">
        <div class="container-fluid">
            <div class="col-xl-10 col-12 mx-auto">
                <div class="row">
                    <div class="col-xxl-2 col-xl-3 col-lg-3"></div>
                    <div class="col-xxl-7 col-xl-6 col-lg-6 align-self-end">
                        <div class="page-title-content">
                            <h1 v-if="title">{{ title }}</h1>
                            <h4 v-if="subtitle">{{ subtitle }}</h4>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3">
                        <div class="product-price-box">
                            <div class="product-price-box__inner">
                                <a class="product-price-box__share" href="#"><img src="/icons/share.svg" /></a>
                                <span class="product-price-box__days">{{ days }} dagar</span>
                                <h4>fr {{ price | priceFormat }}</h4>
                                <div class="product-price-box__opinions"
                                     v-if="reviews">
                                    <Stars :score="reviews.avg"
                                           classes="product-price-box__stars"/>
                                    <span class="product-price-box__score">{{ reviews.avg }}/5</span>
                                    <a class="product-price-box__reviews" href="#">{{ reviews.count }} recensioner</a>
                                </div>
                            </div>
                            <button class="product-price-box__button">BOKA</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  import Stars from '@/components/General/Stars.vue'

  export default {
    props: [
      'background',
      'title',
      'subtitle',
      'days',
      'price',
      'currency',
      'reviews'
    ],
    components: {
      Stars
    }
  }
</script>
