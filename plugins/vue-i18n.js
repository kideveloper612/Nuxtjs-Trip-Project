import Vue from "vue";
import VueI18n from "vue-i18n";
import axios from 'axios';

Vue.use(VueI18n);

export default async ({ app, store }) => {
  app.i18n = new VueI18n({
    locale: 'sv',
    fallbackLocale: 'en',
    messages: {
      // en: await axios.get('https://api.rolfsbuss.se/rolfsapi/v2/web/se/locale'),
      // sv: await axios.get('https://api.rolfsbuss.se/rolfsapi/v2/web/se/locale')
    }
  });
}
