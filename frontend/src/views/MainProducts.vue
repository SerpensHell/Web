<template>
  <div class="container3">
    <section class="products">
      <section class="product-item">
        <div data-link class="image1">
          <img :src= "require(`../assets/img/products/${product.id}.jpg`)" alt="img">
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
            <button  class="btn-group" @click = "addToCart(product)"><span class="bt-txt">Заказать</span></button>
        </div>
      </section>
    </section>
  </div>
</template>

<script>
export default {
  name: "MainProducts",
  props: ['product'],
    methods: {
        addToCart(product){
            //тут добавление в бд корзины пользователя сделать
            const params = {
                id: product.id, count: 1, userId: localStorage.userId
            }
            this.$http.post('/cart', params)
            //.then(response => product.inCart = response.data.inCart)
        }
    }
}

</script>

<style scoped src="../assets/style/product_style.css">
</style>
