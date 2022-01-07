<template>
 <section class ="wrapper">
     <Header></Header>
     <div class="main_container">
     <div class="login-field">

         <form onsubmit="return false;">
             <label>
                 <input type="text"  v-model="username" placeholder="Username" class="al-input">
             </label>
             <label>
                 <input v-model="password" placeholder="Password" type="password" class="al-input">
             </label>
             <p class=" info">{{this.info}}</p>
             <button type="submit" class="SingUpButton" @click = "authorization()">Авторизоваться</button>
         </form>

     </div>
     </div>
     <Footer></Footer>
 </section>
</template>
<script>
import Header from "./Header";
import Footer from "./Footer";
export default {
    name: "Login",
    components: {Footer, Header},
    beforeCreate: function() {
        document.body.className = 'main';
    },
    data() {
        return {
            userId: null,
            username: null,
            password: null,
            info: 'Result',
            correct: false
        }
    },
    methods: {
        authorization(){
            //тут добавление в бд корзины пользователя сделать
            const params = {
                name: this.username, password: this.password
            }
            this.$http.post('/user', params)
                .then(response => this.checkCorrect(response.data.userId))
        },
        checkCorrect(data){
            if(data !== -1)
            {
                this.userId = data
                this.correct = true
                this.$router.push('/')
                this.info = "Success"
                localStorage.userId = this.userId;
            }
            else
            {
                this.info = "Wrong data"
            }
            console.log(this.correct)
        }
    },
    mounted(){
        if (localStorage.userId) {
            this.userId = localStorage.userId;
        }
    }
}
</script>

<style src="../assets/style/login_style.css">
</style>
