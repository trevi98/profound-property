<template>
  <div class="w-full h-[100vh] bg-[#f5f5f5]">
    <Header/>
    <div class="flex justify-evenly items-center w-[50%] mx-auto max-w-[500px] gap-[10px] flex-wrap py-[100px]">
        <router-link class="w-[calc(50%-10px)] aspect-square flex justify-center items-center bg-[#fff]" :to="{name:'ListProjects'}"><span>Manage projects</span></router-link>
        <router-link class="w-[calc(50%-10px)] aspect-square flex justify-center items-center bg-[#fff]" :to="{name:'addProject'}"><span>Add project</span></router-link>
        <router-link class="w-[calc(50%-10px)] aspect-square flex justify-center items-center bg-[#fff]" :to="{name:'home'}"><span>Manage properties</span></router-link>
        <router-link class="w-[calc(50%-10px)] aspect-square flex justify-center items-center bg-[#fff]" :to="{name:'AddProperties'}"><span>Add property</span></router-link>
    </div>
  </div>
</template>

<script>
import Header from '../../components/dashboard/Header.vue'
export default {

    components:{Header},

}
</script>

<style>

</style>
