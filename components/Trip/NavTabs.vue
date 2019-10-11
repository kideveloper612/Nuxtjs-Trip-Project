<template>
    <div class="col-12">
        <ul class="nav nav-tabs justify-content-start nav-tabs__grey-border" role="tablist">
            <li class="nav-item">
                <a class="d-flex justify-content-center align-items-center nav-link"
                   :class="[ (activeTab === 'descr') ? 'active' : '' ]"
                   @click="changeTab('descr')">Översikt</a>
            </li>
            <li class="nav-item">
                <a class="d-flex justify-content-center align-items-center nav-link"
                   :class="[ (activeTab === 'details') ? 'active' : '' ]"
                   @click="changeTab('details')">Dagprogram</a>
            </li>
            <li class="nav-item"  v-if="sections.reviews_exists">
                <a class="d-flex justify-content-center align-items-center nav-link"
                   :class="[ (activeTab === 'testimonials') ? 'active' : '' ]"
                   @click="changeTab('testimonials')">Omdömen</a>
            </li>
            <li class="nav-item" v-if="sections.films_exists">
                <a class="d-flex justify-content-center align-items-center nav-link"
                   :class="[ (activeTab === 'video') ? 'active' : '' ]"
                   @click="changeTab('video')">Filmer</a>
            </li>
            <li class="nav-item"  v-if="sections.hotels_exists">
                <a class="d-flex justify-content-center align-items-center nav-link"
                   :class="[ (activeTab === 'hotels-list') ? 'active' : '' ]"
                   @click="changeTab('hotels-list')">Hotell</a>
            </li>
            <li class="nav-item"  v-if="sections.faq_exists">
               <!-- FIXME: FAQ to be designed
                <a class="d-flex justify-content-center align-items-center nav-link"
                   :class="[ (activeTab === 'faq-list') ? 'active' : '' ]"
                   @click="changeTab('faq-list')">Hotell</a>-->
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['sections'],
        data() {
            return {
                activeTab: 'descr'
            }
        },
        methods: {
            changeTab(tab) {
                this.activeTab = tab;
                this.$emit('changeTab', tab);
            }
        }
    }
</script>
