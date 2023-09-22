<template>
  <div>
    <HeaderCode></HeaderCode>
    <ServiceLayer></ServiceLayer>
    <ServiceSlide></ServiceSlide>
    <BookCode></BookCode>
    <FooterCode></FooterCode>
  </div>
</template>

<script>
import BookCode from '@/components/BookCode.vue';
import FooterCode from '@/components/FooterCode.vue';
import HeaderCode from '@/components/HeaderCode.vue';
import ServiceLayer from '@/components/ServiceLayer.vue';
import ServiceSlide from '@/components/ServiceSlide.vue';

// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeaderCode,
    BookCode,
    FooterCode,
    ServiceLayer,
    ServiceSlide
}
}
</script>
