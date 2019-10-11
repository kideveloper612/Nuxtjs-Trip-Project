<template>
    <!-- BEGIN TABLE -->
    <!-- Nav tabs -->
    <div class="product-departures">

        <div v-if="flightTrip" class="product-table-tabs-wrap">
            <ul class="nav nav-tabs product-table-tabs d-inline-flex justify-content-start justify-content-md-center"
                role="tablist">
                <li  class="nav-item active-tab">
                    <a class="d-flex justify-content-center align-items-center nav-link active" data-toggle="tab"
                       href="#table-tab-one" role="tab">Alla flygplatser</a>
                </li>

                <li v-for="airport in avalibleAirports" class="nav-item">
                    <a class="d-flex justify-content-center align-items-center nav-link" data-toggle="tab"
                       href="#table-tab-two" role="tab">{{airport.name}}</a>
                    <!-- TODO: when clicked list should be filtered with a new call to /calendar with filter: airport=airport.code -->
                </li>
            </ul>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="table-tab-one" role="tabpanel">
                <table class="product-table">
                    <tr>
                        <th>Datum</th>
                        <th>Resmål</th>
                        <th>Flygplats</th>
                        <th>Reseledare</th>
                        <th>Pris</th>
                        <th>Plats</th>
                        <th></th>
                    </tr>
                    <Fragment v-for="(trip, index) in calendar"
                              :key="trip.departureid">
                        <tr :class="(activeRow == index ? 'active' : '')">
                            <td>
                                {{ trip.date }}
                            </td>
                            <td>
                                <span class="product-table__truncate">{{ trip.tripname }}</span>
                            </td>
                            <td>
                                {{ trip.airport_text }}
                            </td>
                            <td>
                                <a :href="trip.tourleader_href">{{ trip.tourleader_name }}</a>
                            </td>
                            <td>
                                fr {{ trip.price }}
                            </td>
                            <td>
                                {{ trip.seats_left }}
                            </td>
                            <td>
                                <button class="product-table__btn product-table__btn__grey"
                                        @click="showInfoTab(index)"><i
                                        class="icon-chevrondown"
                                        :class="(activeRow == index ? 'icon-rotate-180' : '')"></i>info
                                </button>
                                <button class="product-table__btn product-table__btn__blue">Boka</button>
                            </td>
                        </tr>
                        <tr v-if="flightTrip"
                            class="product-table__infotab__tr"
                            :class="(activeRow == index ? 'active' : '')">
                            <td colspan="7" class="">
                                <div class="product-table__infotab">
                                    <button @click="activeRow = null" class="product-table__infotab__close">stäng <img src="/icons/cross.svg" alt=""></button>
                                    <div class="product-table__infotab__buttons">
                                        <button class="active">Påstigningsplatser</button>
                                        <button>Övernattningspaket</button>
                                        <button>Betalningsvillkor</button>
                                    </div>
                                    <div class="product-table__infotab__tabs">
                                        <div class="product-table__infotab__tab product-table__infotab__tab__flights-departures">
                                            <h4>Utresa</h4>
                                            <table>
                                                <tr>
                                                    <th>Från</th>
                                                    <th>Till</th>
                                                    <th>Avgång</th>
                                                    <th></th>
                                                    <th>Ankomst</th>
                                                    <th></th>
                                                    <th>Flyg</th>
                                                </tr>
                                                <tr>
                                                    <td>GOT</td>
                                                    <td>DOH</td>
                                                    <td>2020-01-15</td>
                                                    <td>15.10</td>
                                                    <td>2020-01-15</td>
                                                    <td>23.15</td>
                                                    <td>Qatar QR178</td>
                                                </tr>
                                                <tr>
                                                    <td>DOH</td>
                                                    <td>PER</td>
                                                    <td>2020-01-16</td>
                                                    <td>02.05</td>
                                                    <td>2020-01-16</td>
                                                    <td>18.28</td>
                                                    <td>Qatar QR900</td>
                                                </tr>
                                            </table>

                                            <h4>Hemresa</h4>
                                            <table>
                                                <tr>
                                                    <th>Från</th>
                                                    <th>Till</th>
                                                    <th>Avgång</th>
                                                    <th>Ankomst</th>
                                                    <th>Flyg</th>
                                                </tr>
                                                <tr>
                                                    <td>GOT</td>
                                                    <td>DOH</td>
                                                    <td>2020-01-15</td>
                                                    <td>15.10</td>
                                                    <td>2020-01-15</td>
                                                    <td>23.15</td>
                                                    <td>Qatar QR178</td>
                                                </tr>
                                                <tr>
                                                    <td>DOH</td>
                                                    <td>PER</td>
                                                    <td>2020-01-16</td>
                                                    <td>02.05</td>
                                                    <td>2020-01-16</td>
                                                    <td>18.28</td>
                                                    <td>Qatar QR900</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr v-else
                            class="product-table__infotab__tr"
                            :class="(activeRow == index ? 'active' : '')">
                            <td colspan="7" class="">
                                <div class="product-table__infotab">
                                    <button @click="activeRow = null" class="product-table__infotab__close">stäng <img src="/icons/cross.svg" alt=""></button>
                                    <div class="product-table__infotab__buttons">
                                        <button class="active">Påstigningsplatser</button>
                                        <button>Övernattningspaket</button>
                                        <button>Betalningsvillkor</button>
                                    </div>
                                    <div class="product-table__infotab__tabs">
                                        <div class="product-table__infotab__tab product-table__infotab__tab__bus-departures">
                                            <ul>
                                                <li><span>06.00</span> Ulricehamn</li>
                                                <li><span>06.30</span> Borås</li>
                                                <li><span>06.45</span> Bollebygd</li>
                                                <li><span>06.55</span> Landvetter</li>
                                                <li><span>07.00</span> Landvetter</li>
                                                <li><span>07.30</span> Gbg</li>
                                                <li><span>07.45</span> Kållered</li>
                                                <li><span>08.00</span> Kungsbacka</li>
                                                <li><span>08.30</span> Varberg</li>
                                                <li><span>08.50</span> Falkenberg</li>
                                                <li><span>09.20</span> Halmstad</li>
                                                <li><span>10.00</span> Hallandsåsen</li>
                                                <li><span>10.25</span> Ängelholm</li>
                                                <li><span>10.40</span> Helsingborg</li>
                                                <li><span>11.00</span> Landskrona</li>
                                                <li><span>11.15</span> Löddeköpinge</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </Fragment>
                </table>
            </div>
            <div class="tab-pane" id="table-tab-two" role="tabpanel">...</div>
            <div class="tab-pane" id="table-tab-three" role="tabpanel">...</div>
            <div class="tab-pane" id="table-tab-four" role="tabpanel">...</div>
            <div class="tab-pane" id="table-tab-five" role="tabpanel">...</div>
        </div>
        <div class="product-departures__pagination">
            <button class="product-departures__pagination__arrow product-departures__pagination__arrow__left"><i
                    class="icon-arrow-left"></i></button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button class="product-departures__pagination__arrow product-departures__pagination__arrow__right"><i
                    class="icon-arrow-right"></i></button>
        </div>
    </div>
    <!-- END TABLE -->
</template>

<script>
  import {Fragment} from 'vue-fragment'

  export default {
    components: { Fragment },
    props: ['calendar', 'flightTrip', 'avalibleAirports'],
    data() {
      return {
        activeRow: null
      }
    },
    methods: {
      showInfoTab(index) {
        console.log('index', index);
        if(this.activeRow === index) {
          this.activeRow = null;
        } else {
          this.activeRow = index;
        }
        console.log('activeRow', this.activeRow);
      }
    },
  }
</script>
