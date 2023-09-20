<template>
  <!-- <nav>
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
  </nav> -->
  <router-view />
</template>

<script>
export default {
  mounted() {
    this.$loadScript("https://code.jquery.com/jquery-3.4.1.min.js").then(() => {
      this.$loadScript(
        "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
      ).then(() => {
        this.$loadScript("lib/wow/wow.min.js").then(() => {
          this.$loadScript("lib/easing/easing.min.js").then(() => {
            this.$loadScript("lib/waypoints/waypoints.min.js").then(() => {
              this.$loadScript("lib/counterup/counterup.min.js").then(() => {
                this.$loadScript("lib/owlcarousel/owl.carousel.min.js").then(
                  () => {
                    this.$loadScript("lib/tempusdominus/js/moment.min.js").then(
                      () => {
                        this.$loadScript(
                          "lib/tempusdominus/js/moment-timezone.min.js"
                        ).then(() => {
                          this.$loadScript(
                            "lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"
                          ).then(() => {
                            this.$loadScript("js/main.js").then(() => {});
                          });
                        });
                      }
                    );
                  }
                );
              });
            });
          });
        });
      });
    });

  },
};
</script>
