<template>
    <div>
        <!-- BEGIN HEADER BG -->
        <Banner title="Kataloger"
                subtitle="Beställ eller ladda ner"
                background="/images/reseledare-head-bg.png" />
        <!-- END HEADER BG -->

        <!-- BEGIN ARTICLES & SIDE MENU -->
        <div class="container-fluid top-section">
            <div class="row">
                <div class="col-xl-10 col-12 mx-auto">
                    <div class="row">
                        <Sidebar/>

                        <!-- BEGIN PRODUCT CONTENT -->
                        <div class="col-xl-9 col-lg-9 col-12 ml-auto catalogue-padding-top">
                            <p>På vår hemsida hittar du den senaste och mest uppdaterade infromationen om våra resor. Under året ger vi också ut ett antal tryckta kataloger. Du kan ladda ner dem här, eller beställa hem direkt till brevlådan.</p>
                            <div class="catalogues-list">
                                <div class="catalogues-list__item" v-for="catalogue in catalogues">
                                    <a :href="catalogue.pdf"
                                       class="catalogues-list__thumb">
                                        <img :src="catalogue.img" :alt="catalogue.name">
                                    </a>
                                    {{ catalogue.name }}
                                    <a :href="catalogue.pdf">Ladda ner</a>
                                </div>
                            </div>

                            <form class="catalogue-form">
                                <div class="catalogue-form__row">
                                    <div class="catalogue-form__row__descr">
                                        <label for="order-name">Namn</label>
                                    </div>
                                    <div class="catalogue-form__row__content">
                                        <input type="text"
                                               name="order-name"
                                               id="order-name"
                                               v-model="name">
                                    </div>
                                </div>

                                <div class="catalogue-form__row">
                                    <div class="catalogue-form__row__descr">
                                        <label for="order-address">Adress</label>
                                    </div>
                                    <div class="catalogue-form__row__content">
                                        <input type="text"
                                               name="order-address"
                                               id="order-address"
                                               v-model="address">
                                    </div>
                                </div>

                                <div class="catalogue-form__addressRow">
                                    <div class="catalogue-form__addressRow__postcode">
                                        <label for="order-postcode">Postnummer</label>
                                        <input type="text"
                                               name="order-postcode"
                                               id="order-postcode"
                                               @keypress="allowOnlyDigits"
                                               v-model="postcode">
                                    </div>
                                    <div class="catalogue-form__addressRow__city">
                                        <label for="order-city">Ort</label>
                                        <input type="text"
                                               name="order-city"
                                               id="order-city"
                                               v-model="city">
                                    </div>
                                </div>

                                <div class="catalogue-form__row">
                                    <div class="catalogue-form__row__descr">
                                        <label for="order-email">E-post</label>
                                    </div>
                                    <div class="catalogue-form__row__content">
                                        <input type="text"
                                               name="order-email"
                                               id="order-email"
                                               v-model="email">
                                    </div>
                                </div>

                                <div class="catalogue-form__row">
                                    <div class="catalogue-form__row__descr"></div>
                                    <div class="catalogue-form__row__content catalogue-form__foot">
                                        <div class="catalogue-form__foot__products">
                                            <div v-for="(catalogue, index) in catalogues">
                                                <input :id="'catalogue' + index"
                                                       type="checkbox"
                                                       :value="catalogue.name"
                                                       :name="'catalogue' + index"
                                                       v-model="products">
                                                <label :for="'catalogue' + index">{{ catalogue.name }}</label>
                                            </div>
                                        </div>
                                        <div class="catalogue-form__foot__submit">
                                            <input type="submit"
                                                   value="BESTÄLL"
                                                   @click.prevent="orderCatalogue">
                                        </div>
                                    </div>
                                </div>

                                <div class="catalogue-form__row">
                                    <div class="catalogue-form__row__descr"></div>
                                    <div class="catalogue-form__row__content">
                                        <div class="catalogue-form__notify"
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- END PRODUCT CONTENT -->

                    </div>
                </div>
            </div>
        </div>
        <!-- END ARTICLES & SIDE MENU -->

    </div>
</template>

<script>
  import axios from 'axios'

  import Sidebar from '@/components/Sidebar.vue'
  import Banner from '@/components/Banner.vue'

  export default {
    asyncData ({ params, error, store }) {
      return axios.get('/avalible-catalogues')
        .then((res) => {
          if(res.data.error) {
            error({ statusCode: 404, message: 'Trip not found' })
          }
          return {
            catalogues: res.data
          }
        })
        .catch((e) => {
          error({ statusCode: 404, message: 'Post not found' })
        })
    },
    data() {
      return {
        name: '',
        address: '',
        postcode: '',
        city: '',
        email: '',
        products: [],
      }
    },
    methods: {
      allowOnlyDigits(event) {
        let keyCode = (event.keyCode ? event.keyCode : event.which);
        if (keyCode < 48 || keyCode > 57) {
          event.preventDefault();
        }
      },
      orderCatalogue() {
        if (!this.name || !this.address || !this.postcode || !this.city || !this.validateEmail(this.email) || !this.products.length) {
          this.$toasted.show("Not all fields has been filled in correctly", {
            theme: "bubble",
            position: "bottom-center",
            duration : 1000
          });
          return false;
        }

        this.$toasted.show("Order is being sent...", {
          theme: "bubble",
          position: "bottom-center",
          duration : 1000
        });

        axios.post('/order-catalogues', {
          name: this.name,
          address: this.address,
          postalcode: this.postcode,
          city: this.city,
          email: this.email,
          catalogues: this.products.join('; ')
        })
          .then((response) => {
            this.orderSuccess(response);
          })
          .catch((error) => {
            this.orderFailure(error);
          });
      },
      orderSuccess(response) {
        console.log(response);
        this.name = '';
        this.address = '';
        this.postcode = '';
        this.city = '';
        this.email = '';
        this.products = [];
        this.$toasted.show("Order was sent", {
          theme: "bubble",
          position: "bottom-center",
          duration : 1000
        });
      },
      orderFailure(error) {
        console.log(error);
        this.$toasted.show("Error occured", {
          theme: "bubble",
          position: "bottom-center",
          duration : 1000
        });
      },
      validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }
    },
    components: {
      Sidebar,
      Banner
    },

  }
</script>
