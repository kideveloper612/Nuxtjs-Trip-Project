<template>
    <div class="product-suggested">
        <h2>Andra liknande resor:</h2>
        <div class="row">
            <div v-for="(item, index) in suggested"
                 :class="index == 1 ? 'col-md-8' : 'col-md-4'" class="grid-item">
                <a class="product-suggested__item"
                   :href="item.url">
                    <div class="product-suggested__item__thumb"
                         :style="{'background-image': 'url(' + item.main_picture_1 + ')'}"></div>
                    <div class="product-suggested__item__heading">
                        <h3>{{ item.title }}</h3>
                        <h4>{{ item.subtitle }}</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      props: ['suggested']
    }
</script>
