<template>
  <div class="container5">
    <section class="products">
      <section class="product-item">
        <div data-link class="image1">
          <img :src= item.image alt="img">
        </div>
        <div class="pr-title">
          <p>
                    <span style="font-size: 20px">
                        <u>{{item.title}}</u>
                    </span>
          </p>
        </div>
        <div class="txt">
          <p>
                    <span style="font-size: 17px">
                        {{item.description}}
                    </span>
          </p>
        </div>
      </section>
    </section>
  </div>
</template>

<script>
export default {
  name: "InfoItems",
  props: ['item']
}
</script>

<style scoped>

</style>