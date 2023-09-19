<template>
    <HeaderCodeVue></HeaderCodeVue>
    <HomeLayer></HomeLayer>
    <ServiceCodeVue></ServiceCodeVue>
    <AboutCode></AboutCode>
    <ServiceSlide></ServiceSlide>
    <BookCode></BookCode>
    <TeamCode></TeamCode>
    <FooterCode></FooterCode>
</template>

<script>
// @ is an alias to /src
import HeaderCodeVue from '@/components/HeaderCode.vue';
import ServiceCodeVue from '@/components/ServiceCode.vue';
import AboutCode from '@/components/AboutCode.vue';
import ServiceSlide from '@/components/ServiceSlide.vue';
import BookCode from '@/components/BookCode.vue';
import TeamCode from '@/components/TeamCode.vue';
import FooterCode from '@/components/FooterCode.vue'
import HomeLayer from '@/components/HomeLayer.vue';

export default {
  name: 'HomeView',
  components: {
    HeaderCodeVue,
    ServiceCodeVue,
    AboutCode,
    ServiceSlide,
    BookCode,
    TeamCode,
    FooterCode,
    HomeLayer
  }
}
</script>
