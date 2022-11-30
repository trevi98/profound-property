<template>
    <div class="w-full min-h-[100vh] bg-[#ddd]">
        <div class="w-[80%] mx-auto py-[20px]">
            <input type="text" name="" id="" @keyup="filter" v-model="search" placeholder="search" class="border-b-[1px] border-[#555] border-solid">
        </div>
        <div v-if="areas" class="flex w-[80%] mx-auto justify-center items-center flex-wrap gap-[10px] my-[10px]">
            <div v-for="area in areas" :key="area.id" class="toselect border-[2px]  hover:cursor-pointer w-[200px] h-[200px] flex justify-center items-center bg-[#fff]" @click="select">
                <div>

                    {{ area.title }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { apiBack } from '../axios';
export default {
    data(){
        return {
            areas: null,
            search:"",
            res:null
        }
    },
    mounted(){
        apiBack.get('/locations')
        .then((response) => {
            // handle success
            console.log(response.data.payload);
            this.res = response.data.payload;
            this.areas = response.data.payload;
        })
        .catch((error) => {
            // handle error
            console.log(error);
        })
    },
    methods:{
        filter($event){
            // console.log($event.target)
            console.log(this.search);
            this.areas = this.res.filter((area)=>{
                return area.title.toLowerCase().includes(this.search.toLowerCase())
            })
        },
        select($event){
            document.querySelectorAll('.toselect').forEach((elmnt)=>{
                elmnt.classList.remove('border-[#000]')
            })
            $event.target.classList.add('border-[#000]')
        }
    }
}
</script>

<style>

</style>
