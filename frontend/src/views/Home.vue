<template>
<section>
  <Header></Header>
  <TopImg></TopImg>
  <main class="main_container">
    <div class ="container2">
      <div class="title">
        <p>
            <span style = "font-size: 40px">
                <span>ПОДБЕРИТЕ ИДЕАЛЬНЫЙ ПАРФЮМ</span>
            </span>
        </p>
      </div>
      <div class="sub_title">
        <span style="font-size: 24px">ДЛЯ НЕЕ. ДЛЯ НЕГО. ДЛЯ СЕБЯ </span>
      </div>
    </div>
    <section class="products">
      <div  class="v-for" v-for="product in products">
        <MainProducts :product="product"></MainProducts>
      </div>
    </section>
    <div class="container4">
      <div class="sub_title">
        <span style="font-size: 30px">
            Ознакомьтесь со всем ассортиментом
        </span>
      </div>
      <div class="btn-group">
        <a href="">Перейти к продукции</a>
      </div>
    </div>
    <section class="items">
      <div class = "v-for" v-for="item in items">
    <InfoItems :item = "item"> </InfoItems>
      </div>
    </section>
  </main>
  <Footer></Footer>
</section>
</template>

<script>
import Header from "./Header";
import TopImg from "./TopImg";
import MainProducts from "./MainProducts";
import InfoItems from "./InfoItems";
import Footer from "./Footer";
export default {
  name: 'Home',
  components: {Footer, InfoItems, MainProducts, TopImg, Header},

  data(){
    return{
      products:[
        {
          title:'Coco Mademoiselle 70ml',
          image: require('../assets/img/main_products/1.jpg'),
          description: 'Женственный восточный аромат с удивительной свежестью. Яркие и сочные апельсиновые брызги\n' +
              '                        контрастируют с ясным и чувственным сердцем, в котором раскрываются\n' +
              '                        прозрачные аккорды жасмина и розы.',
          price: 12900
        },
        {
          title:'Terre d\'Hermes 70ml',
          image: require('../assets/img/main_products/2.png'),
          description: 'Terre d’Hermès — это аромат для мужчин, символическое повествование о материи и ее превращениях.\n' +
              '                        Яркий, сильный, истинно мужской аромат.\n' +
              'Вода, заключенная в пространство между землей и небом. Древесный, растительный, минеральный.',
          price: 6900
        },
        {
          title:'Chance Chanel 70ml',
          image: require('../assets/img/main_products/3.png'),
          description: 'Композиция из цветочных нот с чувственными, пряными и\n' +
              '                        гурманскими аккордами розового перца, жасмина и амбровых пачули. Неуловимый аромат, который\n' +
              '                        рисует страстный, подвижный и оптимистичный мир.',
          price: 6900
        }
      ],
      items:[
        {
          title: 'Мы работаем с 2008 года',
          image: require('../assets/img/items/ico1.png'),
          description: 'Уже на на протяжении 13 лет мы радуем своих покупателей, предоставляя отличный сервис'
        },
        {
          title: 'Более 100 000 заказов',
          image: require('../assets/img/items/ico2.png'),
          description: 'Сложно найти город в России, куда мы еще не отправили заказ'
        },
        {
          title: '70% довольных покупателей',
          image: require('../assets/img/items/ico3.png'),
          description: 'Система накопительных скидок позволяет экономить постоянным покупателям'
        }
      ]
    }
  }
}
</script>

<style scoped src="../assets/style/main_style.css">

</style>