<template>
    <div class="cart">
        <span v-if="cart">{{cart.total}} ₽</span>
    </div>
</template>

<script>

export default {
    name: "Cart",

    data() {
        return {
            cart: []
        }
    },
    created(){
        this.$http.get('/cart/' + localStorage.userId)
            .then(response => this.cart = response.data)
    }
}
</script>

<style src="../assets/style/productpage_style.css">

</style>
