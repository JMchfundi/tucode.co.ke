<template>
  <HeaderCode></HeaderCode>
    <ServiceSlide></ServiceSlide>
</template>

<script>
// @ is an alias to /src
import HeaderCode from '@/components/HeaderCode.vue';
import ServiceSlide from '@/components/ServiceSlide.vue';

export default {
  name: 'ServiceView',
  components: {
    ServiceSlide,
    HeaderCode
}
}
</script>
