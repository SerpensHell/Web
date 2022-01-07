<template>
  <section class="wrapper">
<Header></Header>
    <main class="main_container">
      <div class="pr-container2">
        <div class="brand-title">
          <p>
            <span style="font-size: 40px">Сoco Chanel</span>
          </p>
        </div>

        <section class="pr-products">
          <div  class="v-for" v-for="product in products1">
            <MainProducts :product="product"></MainProducts>
          </div>
        </section>

        <div class="pr-container2">
          <div class="brand-title">
            <p>
              <span style="font-size: 40px">Gucci</span>
            </p>
          </div>
        </div>

        <section class="pr-products">
          <div  class="v-for" v-for="product in products2">
            <MainProducts :product="product"></MainProducts>
          </div>
        </section>

        <div class="pr-container2">
          <div class="brand-title">
            <p>
              <span style="font-size: 40px">Hermes</span>
            </p>
          </div>
        </div>

        <section class="pr-products">
          <div  class="v-for" v-for="product in products3">
            <MainProducts :product="product"></MainProducts>
          </div>
        </section>
      </div>
    </main>
    <Footer></Footer>
  </section>
</template>

<script>
import Header from "./Header";
import MainProducts from "./MainProducts";
import Footer from "./Footer";
export default {
  name: "ProductPage",
  components: {Header, MainProducts, Footer},

  data() {
    return {
      products1: [],
      products2: [],
      products3: []
    }
  },

    created() {
        this.$http.get('/products1')
            .then(response => this.products1 = response.data)
        this.$http.get('/products2')
            .then(response => this.products2 = response.data)
        this.$http.get('/products3')
            .then(response => this.products3 = response.data)
    }
}


</script>

<style src="../assets/style/productpage_style.css">

</style>
