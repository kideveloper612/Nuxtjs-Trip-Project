import Vue from 'vue'
import { LMap, LTileLayer, LMarker, LControlZoom, LPopup } from 'vue2-leaflet';
import { Icon } from 'leaflet'
import 'leaflet/dist/leaflet.css'

// console.log(L);

Vue.prototype.$LIcon = Icon;

Vue.component('l-map', LMap);
Vue.component('l-tile-layer', LTileLayer);
Vue.component('l-marker', LMarker);
Vue.component('l-control-zoom', LControlZoom);
Vue.component('l-popup', LPopup);

// delete Icon.Default.prototype._getIconUrl;
//
// Icon.Default.mergeOptions({
//   iconUrl: require('./../static/icons/marker.svg'),
// });
