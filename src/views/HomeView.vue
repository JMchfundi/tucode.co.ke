<template>
  <div>
    <HeaderCode></HeaderCode>
    <HomeLayer></HomeLayer>
    <ServiceCode></ServiceCode>
    <AboutCode></AboutCode>
    <FactCode></FactCode>
    <ServiceSlide></ServiceSlide>
    <BookCode></BookCode>
    <TeamCode></TeamCode>
    <FooterCode></FooterCode>
  </div>
</template>

<script>
import AboutCode from '@/components/AboutCode.vue';
import BookCode from '@/components/BookCode.vue';
import FactCode from '@/components/FactCode.vue';
import FooterCode from '@/components/FooterCode.vue';
import HeaderCode from '@/components/HeaderCode.vue';
import HomeLayer from '@/components/HomeLayer.vue';
import ServiceCode from '@/components/ServiceCode.vue';
import ServiceSlide from '@/components/ServiceSlide.vue';
import TeamCode from '@/components/TeamCode.vue';

// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeaderCode,
    HomeLayer,
    ServiceCode,
    AboutCode,
    FactCode,
    ServiceSlide,
    BookCode,
    TeamCode,
    FooterCode
}
}
</script>
