<template>
    <!-- BEGIN DETAILS TAB -->
    <div class="tab-pane" id="details" role="tabpanel">

        <div v-if="itinerary.length > 1" class="product-graybox">
            <img class="product-graybox__ico" src="/icons/clock.svg" alt="clock"/>
            <div>
                <h3>Flera tillganliga dagprogram</h3>
                <p>Det finns flera tillganliga program for den har resan beroende pa vilket datum du valjer att resa.</p>
                <div class="product-graybox__radios">
                    <span v-for="(itineraryItem, index) in itinerary">
                        <input type="radio"
                               :id="itineraryItem.id"
                               name="itineraryProgram"
                               :value="index"
                               v-model="activeItineraryProgram">
                        <label :for="itineraryItem.id">{{ itineraryItem.name }}</label>
                    </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="product-itinerary"
                     v-for="(itineraryItem, index) in itinerary"
                     v-if="index === activeItineraryProgram">
                    <div class="product-itinerary__item"
                         v-for="itineraryDay in itineraryItem.itinerary"
                         v-if="itineraryDay.day !== 'x'">
                        <div class="product-itinerary__day">
                            Dag {{ itineraryDay.day }}
                        </div>
                        <div class="product-itinerary__description">
                            <h2>{{ itineraryDay.title }}</h2>
                            <span v-html="itineraryDay.htmltext"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="productItineraryMap"></div>
            </div>
        </div>

    </div>
    <!-- END DETAILS TAB -->
</template>

<script>
    export default {
        props: ['itinerary'],
        data() {
            return {
                activeItineraryProgram: 0,
            }
        }
    }
</script>
