<template>
    <div class="flex items-center justify-evenly w-full" v-if="types">

        <router-link :to="{name:'xx'}" v-for= "type in types.payload " :key="type.id" class="hover:text-[#fff]">
            {{ type.title }}

        </router-link>
    </div>
</template>

<script>
import {apiFront} from '../axios.js'
export default {

    name:'TypeNav',
    data() {
        return{
            types:null

        }
    },
    mounted(){
        apiFront.get('/types-for-nav')
        .then((response) => {
            // handle success
            console.log(response.data);
            this.types = response.data;
        })
        .catch((error) => {
            // handle error
            console.log(error);
        })

    }


}
</script>

<style>

</style>
