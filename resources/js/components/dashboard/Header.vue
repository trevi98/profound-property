<template>
  <div class="w-[100%] mx-auto h-[100px] bg-[#fff] flex justify-between items-center px-[5%]">
    <router-link :to="{name:'main'}">
        <img src="/images/logo-hg.png" alt="" class="max-w-[250px]">
    </router-link>
    <div @click="logout">
        <div  class="cursor-pointer">
            Logout
        </div>
    </div>
  </div>
</template>

<script>
export default {
    data(){
        return {

        }
    },
    methods:{
        logout(){
            // alert("d")
            if($cookies.get('token') != ""){
                $cookies.remove('token');
                $cookies.remove('role');
                this.$router.push({ name: "login"});

            }
        }
    },
    mounted(){
        if(!$cookies.get('token') && this.$route.name != 'login'){
            this.$router.push({ name: "login"})
        }
    }
}
</script>

<style>

</style>
