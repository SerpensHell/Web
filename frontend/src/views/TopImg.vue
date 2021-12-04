<template>
  <div class = "top_img"  :style="`background: url(${require('@/assets/img/bmhOfH3tbaw.jpg')}) no-repeat`"></div>
</template>

<script>
export default {
  name: "TopImg"
}
</script>

<style>
.top_img{
  width: 100%;
  height: 200px;
  background-size:cover;
  padding-top: 40px;
  padding-bottom: 80px;
  overflow: hidden;
}
</style>