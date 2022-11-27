<template>
  <div class="w-[80%] mx-auto bg-[#fff] rounded-md py-[20px]">
    <form action="" class="flex flex-col justify-center items-center gap-[50px]">
        <div class="flex flex-col justify-center items-start gap-[2px] w-full">
            <label for="title" class="w-[80%] mx-auto">Title:</label>
            <input type="text" name="title" class="border-b-[1px] border-[#555] border-solid w-[80%] mx-auto">
        </div>
        <div class="flex flex-col justify-center items-start gap-[2px] w-full">
            <label for="description" class="w-[80%] mx-auto">Description:</label>
            <textarea  name="description" class="border-b-[1px] border-[#555] border-solid w-[80%] mx-auto"></textarea>
        </div>
        <div class="flex flex-col justify-center items-start gap-[2px] w-full">
            <label for="price" class="w-[80%] mx-auto">Starting price:</label>
            <input type="number" name="price" class="border-b-[1px] border-[#555] border-solid w-[80%] mx-auto">
        </div>
        <div class="flex flex-col justify-center items-start gap-[2px] w-full">
            <label for="area" class="w-[80%] mx-auto">Area:</label>
            <input type="number" name="area" class="border-b-[1px] border-[#555] border-solid w-[80%] mx-auto">
        </div>
        <div class="flex flex-col justify-center items-start gap-[2px] w-full">
            <label for="stores" class="w-[80%] mx-auto">Number of stores:</label>
            <input type="number" name="stores" class="border-b-[1px] border-[#555] border-solid w-[80%] mx-auto">
        </div>
        <div class="flex flex-col justify-center items-start gap-[2px] w-full">
            <label for="appartments" class="w-[80%] mx-auto">Number of appartments in store:</label>
            <input type="number" name="appartments" class="border-b-[1px] border-[#555] border-solid w-[80%] mx-auto">
        </div>
        <div class="flex flex-col justify-center items-start gap-[2px] w-full">
            <label for="dld" class="w-[80%] mx-auto">Dld waver:</label>
            <textarea name="dld" class="border-b-[1px] border-[#555] border-solid w-[80%] mx-auto"></textarea>
        </div>
        <div class="flex flex-col justify-center items-start gap-[2px] w-full">
            <label for="starting_date" class="w-[80%] mx-auto">Starting date:</label>
            <input type="date" name="starting_date" class="border-b-[1px] border-[#555] border-solid w-[80%] mx-auto">
        </div>
        <div class="flex flex-col justify-center items-start gap-[2px] w-full">
            <label for="completion_date" class="w-[80%] mx-auto">Completion date:</label>
            <input type="date" name="completion_date" class="border-b-[1px] border-[#555] border-solid w-[80%] mx-auto">
        </div>
    </form>
  </div>
</template>

<script>
    import { mapState, mapMutations } from 'vuex';
export default {

    data(){
        return {

        }
    },
    methods:{
        ...mapMutations(['']),

    },
    computed:{
        ...mapState(['']),
    }
}
</script>

<style>

</style>
