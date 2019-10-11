<template>
    <div class="page-title"
         :style="{'background-image': 'url(' + background + ')' }">
        <div class="container-fluid">
            <div class="col-xl-10 col-12 mx-auto">
                <div class="row justify-content-between">
                    <div class="col-xxl-2 col-xl-3 col-lg-3"></div>
                    <div class="col-xxl-10 col-xl-9 col-lg-9 align-self-end">
                        <div class="page-title-content">
                            <h1 v-if="title">{{ title }}</h1>
                            <h4 v-if="subtitle">{{ subtitle }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      props: [
        'background',
        'title',
        'subtitle'
      ],
    }
</script>
