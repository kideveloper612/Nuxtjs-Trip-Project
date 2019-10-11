import Vue from 'vue'

Vue.filter('priceFormat', value => {
  if (!value) return '';
  return value.toFixed(0).replace(/(\d)(?=(\d{3})+$)/g, '$1 ');
});

Vue.filter('capitalize', value => {
  if (!value) return '';
  value = value.toString();
  return value.charAt(0).toUpperCase() + value.slice(1);
});

Vue.filter('truncate', (text, length, clamp) => {
  clamp = clamp || '...';
  var node = document.createElement('div');
  node.innerHTML = text;
  var content = node.textContent;
  return content.length > length ? content.slice(0, length) + clamp : content;
});
