import Vuex from 'vuex';
import axios from 'axios';

// import * as actions from './store/actions';
// import * as mutations from './store/mutations';
// import * as getters from './store/getters';
// import auctions from './store/modules/auctions';

const createStore = () => {
  return new Vuex.Store({
    state: () => ({
      sideMenuActive: false,
      locales: ['en', 'sv'],
      locale: 'sv',
      localeObj: null,
      triptypesSidebar: null,
      categoryStart: null,
      calendar: null,
      itinerary: null,
      reviewsForTriptype: null,
      suggestedTriptypes: null,
      ratingsChart: null,
      reviewsForTourleader: null,
      upcomingTriplist: null,
      topNavbar: null,
      triptype: null,
      footer: null,
    }),
    mutations: {
      toggleSideMenuActive(state) {
        state.sideMenuActive = !state.sideMenuActive;
      },
      setLang(state, locale) {
        if (state.locales.indexOf(locale) !== -1) {
          state.locale = locale;
        }
      },
      setTriptypesSidebar(state, data) {
        state.triptypesSidebar = data;
      },
      setCategoryStart(state, data) {
        state.categoryStart = data;
      },
      setCalendar(state, data) {
        state.calendar = data;
      },
      setLocaleObj(state, data) {
        state.localeObj = data;
      },
      setItinerary(state, data) {
        state.itinerary = data;
      },
      setReviewsForTriptype(state, data) {
        state.reviewsForTriptype = data;
      },
      setSuggestedTriptypes(state, data) {
        state.suggestedTriptypes = data;
      },
      setRatingsChart(state, data) {
        state.ratingsChart = data;
      },
      setReviewsForTourleader(state, data) {
        state.reviewsForTourleader = data;
      },
      setUpcomingTriplist(state, data) {
        state.upcomingTriplist = data;
      },
      setTopNavbar(state, data) {
        state.topNavbar = data;
      },
      setFooter(state, data) {
        state.footer = data;
      },
      setTriptype(state, data) {
        state.triptype = data;
      }
    },
    actions: {
      toggleSideMenuActive(vuexContext) {
        vuexContext.commit('toggleSideMenuActive');
      },
      async nuxtServerInit({ commit, dispatch }) {
        await dispatch('fetchTriptypesSidebar');
        await dispatch('fetchTopNavbar');
        await dispatch('fetchFooter');
      },
      async storeDispatchFunc(vuexContext) {
        // let res = await axios.get('https://api.rolfsbuss.se/rolfsapi/v2/web/se/locale');
        // console.log(res);
        // vuexContext.commit('setLocaleObj', res.data);
      },
      async fetchTriptypesSidebar(vuexContext) {
        let res = await axios.get('/triptypes-sidebar');
        vuexContext.commit('setTriptypesSidebar', res.data);
      },
      async fetchCategoryStart(vuexContext) {
        let res = await axios.get('/category/start');
        vuexContext.commit('setCategoryStart', res.data.trips);
      },
      async fetchCalendar(vuexContext, paramsObj) {
        let params = '',
          firstIteration = true;
        for (const property in paramsObj) {
          params += firstIteration ? '?' : '&';
          params += property + '=' + paramsObj[property];
          if (firstIteration) firstIteration = false;
        }
        let res = await axios.get('/calendar/' + params);
        vuexContext.commit('setCalendar', res.data.departures);
      },
      async fetchItinerary(vuexContext, triptypeId) {
        let res = await axios.get('/itinerary/' + triptypeId);
        vuexContext.commit('setItinerary', res.data);
      },
      async fetchReviewsForTriptype(vuexContext, triptypeId) {
        let res = await axios.get('/reviews-for-triptype/' + triptypeId);
        vuexContext.commit('setReviewsForTriptype', res.data);
      },
      async fetchSuggestedTriptypes(vuexContext, triptypeId, number) {
        const num = number ? number : 5;
        let res = await axios.get(
          '/triptypes-suggested/' + triptypeId + '/' + num
        );
        vuexContext.commit('setSuggestedTriptypes', res.data);
      },
      async fetchRatingsChart(vuexContext, triptypeId) {
        let res = await axios.get('/ratingschart/' + triptypeId);
        vuexContext.commit('setRatingsChart', res.data);
      },
      async fetchReviewsForTourleader(vuexContext, id) {
        let res = await axios.get('/reviews-for-tourleader/' + id);
        vuexContext.commit('setReviewsForTourleader', res.data);
      },
      async fetchUpcomingTriplist(vuexContext, category) {
        let res = await axios.get('/upcoming-triplist/' + category);
        vuexContext.commit('setUpcomingTriplist', res.data);
      },
      async fetchTopNavbar(vuexContext, category) {
        let res = await axios.get('/topnavbar/');
        vuexContext.commit('setTopNavbar', res.data);
      },
      async fetchFooter(vuexContext) {
        let res = await axios.get('footer-links');
        vuexContext.commit('setFooter', res.data);
      },
      async fetchTriptype(vuexContext, paramsObj) {
        let params = '',
          firstIteration = true;
        for (const property in paramsObj) {
          params += firstIteration ? '?' : '&';
          params += property + '=' + paramsObj[property];
          if (firstIteration) firstIteration = false;
        }
        let res = await axios.get('/triptype' + params, { crossdomain: true });
        vuexContext.commit('setTriptype', res.data);
      }
    },
    getters: {
      getTriptypesSidebar(state) {
        return state.triptypesSidebar;
      },
      getCategoryStart(state) {
        return state.categoryStart;
      },
      getCalendar(state) {
        return state.calendar;
      },
      getItinerary(state) {
        return state.itinerary;
      },
      getReviewsForTriptype(state) {
        return state.reviewsForTriptype;
      },
      getSuggestedTriptypes(state) {
        return state.suggestedTriptypes;
      },
      getRatingsChart(state) {
        return state.ratingsChart;
      },
      getSideMenuActive(state) {
        return state.sideMenuActive;
      },
      getReviewsForTourleader(state) {
        return state.reviewsForTourleader;
      },
      getUpcomingTriplist(state) {
        return state.upcomingTriplist;
      },
      getTopNavbar(state) {
        return state.topNavbar;
      },
      getFooter(state) {
        return state.footer;
      },
      getTriptype(state) {
        return state.triptype;
      },
    }
  });
};

export default createStore;
