<template>
  <splide :options="options">
    <splide-slide>
      <img class="img-circle" width="304" height="304" src="images/membersImg.png">
    </splide-slide>
    <splide-slide>
      <img class="img-circle" width="304" height="304" src="images/slide1.jpg">
    </splide-slide>
    <splide-slide>
      <img class="img-circle" width="304" height="304" src="images/membersImg.png">
    </splide-slide>
  </splide>
</template>

<script>
import {Splide, SplideSlide} from '@splidejs/vue-splide';

import '@splidejs/splide/dist/css/themes/splide-default.min.css';

export default {
  name: "ImageSlider",
  components: {
    Splide,
    SplideSlide,
    options: {
      rewind : true,
      // width  : 200,
      // height: auto,
      perPage: 1,
      heightRatio: 0.5,
      pagination : false,
      arrows     : false,
      // gap    : '1rem',
    },
  },
}
</script>

<style scoped>

</style>
