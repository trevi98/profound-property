<template>
  <div class="w-full h-[100vh] bg-[#eee]">
    <div class="flex justify-evenly items-center w-[50%] mx-auto max-w-[500px] gap-[10px] flex-wrap py-[100px]">
        <router-link class="w-[calc(50%-10px)] aspect-square flex justify-center items-center bg-[#fff]" :to="{name:'home'}"><span>Manage projects</span></router-link>
        <router-link class="w-[calc(50%-10px)] aspect-square flex justify-center items-center bg-[#fff]" :to="{name:'addProject'}"><span>Add project</span></router-link>
        <router-link class="w-[calc(50%-10px)] aspect-square flex justify-center items-center bg-[#fff]" :to="{name:'home'}"><span>Manage properties</span></router-link>
        <router-link class="w-[calc(50%-10px)] aspect-square flex justify-center items-center bg-[#fff]" :to="{name:'home'}"><span>Add property</span></router-link>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
