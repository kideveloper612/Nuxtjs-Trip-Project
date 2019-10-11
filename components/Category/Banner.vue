<template>
    <!-- BEGIN HEADER BG -->
    <div class="category-bg page-title" :style="{ backgroundImage: 'url(' + backgroundImage + ')' }">
        <div class="container-fluid">
            <div class="col-xl-10 mx-auto">
                <div class="row justify-content-between">
                    <div class="col-xxl-2 col-xl-3 col-lg-3"></div>
                    <div class="col-xxl-10 col-xl-9 col-lg-9 align-self-end">
                        <div class="page-title-content">
                            <h1>{{ title | capitalize }}</h1>
                            <p class="fz-20" v-if="subtitle">{{ subtitle }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER BG -->
</template>

<script>
    export default {
      props: ['backgroundImage', 'title', 'subtitle']
    }
</script>
