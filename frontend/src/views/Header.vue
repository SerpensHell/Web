<template>
  <header class="header">
    <div class="container1">
      <div class="top_menu">
        <ul class="left-main">
          <li><router-link to="/">Главная</router-link></li>
          <li class = "left-item"><a href="">О компании</a> </li>
          <li><router-link to="ProductPage">Продукция</router-link></li>
        </ul>
        <h1 class="logo" style="color: palevioletred">The Perfume House</h1>
        <ul class="right-main">
          <li class = "right-item"><a href="">Корзина</a></li>
            <li class = "right-item"> <Cart></Cart></li>
            <li><router-link to="Login">Авторизация</router-link></li>

        </ul>
      </div>
    </div>
  </header>
</template>

<script>
import Cart from "./Cart";
export default {
  name: "Header",
    components: {Cart}
}
</script>

<style src="../assets/style/header_style.css">
</style>
