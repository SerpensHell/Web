<template>
  <div class="container3">
    <section class="products">
      <section class="product-item">
        <div data-link class="image1">
          <img :src= product.image alt="img">
        </div>

        <div class="pr-title">
          <p>
          <u>{{product.title}}</u>
          </p>
          </div>

        <div class="txt">
          <p>
          {{product.description}}
          </p>
          </div>

        <div class="price">
         <span class="price"> {{product.price}} руб. </span>
        </div>
        <div class="btn-group">
          <a href="">Заказать</a>
        </div>
      </section>
    </section>
  </div>
</template>

<script>
export default {
  name: "MainProducts",
  props: ['product']
}
</script>

<style scoped src="../assets/style/product_style.css">
</style>