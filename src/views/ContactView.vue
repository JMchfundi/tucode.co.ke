<template>
  <div>
    <HeaderCode></HeaderCode>
    <ContactLayer></ContactLayer>
    <FormCode></FormCode>
    <FooterCode></FooterCode>
  </div>
</template>

<script>
import FooterCode from '@/components/FooterCode.vue';
import HeaderCode from '@/components/HeaderCode.vue';
import ContactLayer from '@/components/ContactLayer.vue';
import FormCode from '@/components/FormCode.vue';

// @ is an alias to /src

export default {
  name: 'HomeView',
  components: {
    HeaderCode,
    FooterCode,
    ContactLayer,
    FormCode
}
}
</script>
