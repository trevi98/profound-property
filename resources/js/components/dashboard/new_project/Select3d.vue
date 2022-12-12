<template>
    <div class="flex flex-col gap-[5px]">
        <div class="pb-[5px] text-lg">
            {{ lable }}
        </div>
        <div class="flex flex-col gap-[2px]">
            <div class="cursor-pointer hover:scale-110 transition-all w-[90px] origin-center " v-for="elmnt in data" :key="elmnt.id" @click="select(elmnt)" :id="`select3d${elmnt.title[0][1]}${elmnt.id}`" :class="`${lable}Selected`">
                {{ elmnt.title }}
            </div>
        </div>
    </div>
</template>

<script>
export default {

    props: ['lable','data'],
    data(){
        return{
            selected: null
        }
    },
    methods:{
        select(elmnt){
            this.reset();
            // console.log(`#select3d${elmnt.title}${elmnt.id}`)
            document.querySelector(`#select3d${elmnt.title[0][1]}${elmnt.id}`).classList.add('!scale-[1.4]')
            document.querySelector(`#select3d${elmnt.title[0][1]}${elmnt.id}`).classList.add('text-center')
        },
        reset(){
            document.querySelectorAll(`.${this.lable}Selected`).forEach(elmnt => {
                elmnt.classList.remove('!scale-[1.4]')
                elmnt.classList.remove('text-center')
            });
        }
    }
}
</script>

<style>

</style>
