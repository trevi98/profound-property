<template>
    <div class="w-full h-[100vh] absolute bg-[#f5f5f5]">
        <Header/>
        <!-- {{ $cookies.get('token') }} -->
        <form @submit.prevent="login" class="flex flex-col justify-center items-center gap-[20px] w-[50%] p-[10px] my-[50px] mx-auto bg-[#fff] rounded-md">
            <div class="text-2xl">Login</div>

                <div class="flex flex-col justify-center items-start gap-[10px]">
                    <label for="email" >Email</label>
                    <input type="email" name="email" id="" class="border-[1px] border-solid border-[#888]" v-model="formData.email">
                </div>
                <div class="flex flex-col justify-center items-start gap-[10px]">
                    <label for="password" >Password</label>
                    <input type="password" name="password" id="" class="border-[1px] border-solid border-[#888]" v-model="formData.password">
                </div>
                <button class="p-[10px] bg-[#eee] text-[#000]" >Login</button>
                <div class="text-[#d00]">{{ error }}</div>
        </form>
    </div>
</template>

<script>
import { apiBack } from '../../axios';
import {mapMutations} from 'vuex';
import Header from '../../components/dashboard/Header.vue';
export default {
    name:'LoginView',
    components:{Header},
    data() {
        return {
            formData:{
                email:'',
                password:'',
            },
            error:''
        }
    },
    methods: {
        ...mapMutations(['setUser']),
        login(){
            if( !this.validate(this.formData.email,this.formData.password)){
                this.error = "Email and password are required!"
                return
            }
            this.error = '';

            apiBack.post('/login-agent', {
                email: this.formData.email,
                password: this.formData.password
            })
            .then( (response)  => {
                // console.log(response.data);
                this.setUser({
                    token:response.data.accessToken,
                    id:response.data.user.id,
                    role:response.data.role,
                });
                $cookies.set('token',response.data.accessToken)
                $cookies.set('role',response.data.roleTitle)
                $cookies.set('id',response.data.user.id)
                console.log($cookies.get('token'));
                if($cookies.get('token') != "" && $cookies.get('role') == 'agent'){

                    this.$router.push({ name: "main"})
                }
            })
            .catch( (error) => {
                console.log(error);
                this.error = error.response.data.message
            });
        },

        validate(email,password){
            if(email == '' || password == ''){
                return false;
            }
            return true;
        }
    },
    mounted(){
        if($cookies.get('token') != '' && $cookies.get('role') == 'agent'){
            this.$router.push({ name: "home"})
        }
    }

}
</script>

<style>

</style>
