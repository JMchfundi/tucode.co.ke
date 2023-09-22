<template>
  <div>
    <HeaderCode></HeaderCode>
    <AboutLayer></AboutLayer>
    <AboutCode></AboutCode>
    <FactCode></FactCode>
    <TeamCode></TeamCode>
    <FooterCode></FooterCode>
  </div>
</template>

<script>
import AboutCode from '@/components/AboutCode.vue';
import AboutLayer from '@/components/AboutLayer.vue';
import FactCode from '@/components/FactCode.vue';
import FooterCode from '@/components/FooterCode.vue';
import HeaderCode from '@/components/HeaderCode.vue';
import TeamCode from '@/components/TeamCode.vue';

// @ is an alias to /src

export default {
  name: 'AboutView',
  components: {
    HeaderCode,
    AboutCode,
    FactCode,
    TeamCode,
    FooterCode,
    AboutLayer
}
}
</script>