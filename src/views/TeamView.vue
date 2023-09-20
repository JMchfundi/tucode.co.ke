<template>
  <div>
    <HeaderCode></HeaderCode>
    <TeamLayer></TeamLayer>
    <TeamCode></TeamCode>
    <FooterCode></FooterCode>
  </div>
</template>

<script>
import FooterCode from '@/components/FooterCode.vue';
import HeaderCode from '@/components/HeaderCode.vue';
import TeamCode from '@/components/TeamCode.vue';
import TeamLayer from '@/components/TeamLayer.vue';

// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeaderCode,
    TeamCode,
    FooterCode,
    TeamLayer
}
}
</script>
