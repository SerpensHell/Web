<template>
  <section>
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
      products1: [
        {
          title: 'Coco Allure 70ml',
          image: require('../assets/img/products/1.jpg'),
          description: 'Свежий цветочно-восточный аромат, утонченный и элегантный. В нем соединяются игристые ноты мандарина,\n' +
              '                        мягкость розы и чувственность ванили.',
          price: 19100
        },
        {
          title: 'Coco Mademoiselle 70ml',
          image: require('../assets/img/products/2.jpg'),
          description: 'Женственный восточный аромат. Яркие апельсиновые брызги\n' +
              '                        контрастируют с чувственным сердцем, в котором раскрываются\n' +
              '                      аккорды жасмина и розы.',
          price: 12900
        },
        {
          title: 'Coco Cristalle 70ml',
          image: require('../assets/img/products/3.jpg'),
          description: 'Свежий зелено-цветочный аромат.Композиция открывается цитрусовыми нотами,\n' +
              '                        которые постепенно отступают перед мягкостью магнолии и ириса.',
          price: 10100
        },
        {
          title: 'Chance Chanel 70ml',
          image: require('../assets/img/products/4.png'),
          description: 'Композиция из цветочных нот с чувственными и пряными \n' +
              '                        аккордами розового перца, жасмина и амбровых пачули. Вуаль из ванили и белого\n' +
              '                        мускуса.',
          price: 12900
        }
      ],
      products2: [
        {
          title: 'Gucci Flora 70m',
          image: require('../assets/img/products/5.jpg'),
          description: 'Аромат основан на цветочных нотах, одновременно являясь необычным и завораживающим. Свежесть\n' +
              '                        цитрусовых и пион использованы в верхних нотах для создания чувственного звучания юности.',
          price: 10850
        },
        {
          title: 'Gucci Bloom 70ml',
          image: require('../assets/img/products/6.jpg'),
          description: 'Тубероза и жасмин натурального происхождения оставляют на коже неожиданно насыщенный цветочный\n' +
              '                        аромат с нотами белых цветов. Цветы винограда также отличаются приятным, слегка пудровым\n' +
              '                        цветочным ароматом.',
          price: 8800
        },
        {
          title: 'Gucci Bamboo 70ml',
          image: require('../assets/img/products/7.jpg'),
          description: 'Флакон, сочетающий в себе изысканную чувственность и строгие линии, демонстрирует контраст\n' +
              '                        между женственным цветом аромата и внушительной металлической крышкой в виде части\n' +
              '                        стебля бамбука.',
          price: 8400
        },
        {
          title: 'Gucci Rush 70ml',
          image: require('../assets/img/products/8.jpg'),
          description: 'Композиция запаха открывается прикосновениями лепестков африканской фрезии,\n' +
              '                        персика и калифорнийской гардении, на смену которым приходят нежные ноты сердца: жасмин,\n' +
              '                        дамасская роза и кориандр.',
          price: 7200
        }
      ],
      products3: [
        {
          title: 'Terre d\'Hermes 70ml',
          image: require('../assets/img/products/9.png'),
          description: 'Cимволическое повествование о материи и ее превращениях.\n' +
              '                        Вода, заключенная в пространство между землей и небом. Древесный, растительный, минеральный.',
          price: 6900
        },
        {
          title: 'Hermes Un Jardin 70ml',
          image: require('../assets/img/products/10.png'),
          description: 'Начальные ноты обнимают приятной прохладой морских аккордов. Их бодрящая\n' +
              '                        энергия и легкое соленое послевкусие тонким орнаментом украшают «сердце»',
          price: 3500
        },
        {
          title: 'Hermes LAmbre 70ml',
          image: require('../assets/img/products/11.jpg'),
          description: 'Композиция аромата открывается звучанием амбры и лабданума. Центральный аккорд добавляет\n' +
              '                        феноменальному благоуханию тонкое изящное обрамление из ванили.',
          price: 5200
        },
        {
          title: 'Hermes Caleche 70ml',
          image: require('../assets/img/products/12.png'),
          description: 'Стартуя нежно-пряной нотой розового перца, лимона и бергамота, в «сердце» благоухание потрясает красотой\n' +
              '                        звучания розы и волнует шлейфовыми оттенками пачулей.',
          price: 4100
        }
      ]
    }
  }
}


</script>

<style src="../assets/style/productpage_style.css">

</style>