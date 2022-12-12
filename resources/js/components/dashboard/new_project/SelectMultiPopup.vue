<template>
  <div>
    <div class="flex justify-start items-start gap-[10px] w-full flex-wrap">


        <div v-for="amenity in selected" :key="amenity.id" class=" w-max px-[40px] h-[30px] rounded-full border-[1px] border-[#000] flex justify-center items-center cursor-pointer hover:bg-[#f5f5f5] transition-all">
            <div>
                {{ amenity.title }}
            </div>
        </div>


        <div class="w-max px-[40px] h-[30px] rounded-full border-[2px] border-[#000] flex justify-center items-center cursor-pointer hover:bg-[#f5f5f5] transition-all border-dashed" v-on:click="displayPopup">
            <div>
                Add Amenities
            </div>
        </div>
    </div>


    <!-- popup -->
    <div class="fixed w-[100vw] h-[100vh] flex justify-center items-center top-[0px] left-[0px] bg-[#000000a0]" v-if="display">
        <div class="w-[60%] h-[80vh] min-h-[400px] flex flex-col justify-center items-center">
            <div class="h-[100px] bg-[#0b3841] flex justify-between items-center w-full px-[10px] text-[#fff] rounded-t-md">
                <div class="text-xl">
                    Select Amenities
                </div>
                <div class="cursor-pointer" v-on:click="displayPopup">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40" fill="#fff"><path d="m10.542 30.958-1.5-1.5 9.5-9.458-9.5-9.458 1.5-1.5 9.458 9.5 9.458-9.5 1.5 1.5-9.5 9.458 9.5 9.458-1.5 1.5-9.458-9.5Z"/></svg>
                </div>
            </div>
            <div class="bg-[#fff] h-full max-h-[500px] w-full px-[10px] flex justify-start items-start py-[20px] flex-wrap gap-[10px] overflow-x-scroll">
                <div v-for="amenity in all" :key="amenity.id" class=" w-max px-[40px] h-[30px] rounded-full border-[1px] border-[#000] flex justify-center items-center cursor-pointer hover:bg-[#f5f5f5] transition-all" v-on:click="togglePending($event,amenity.title,amenity.id)" :id="`amenity${amenity.id}`" :class="this.pending.findIndex(x => x.id == amenity.id) != -1 ? `!border-[2px] bg-[#f5f5f5]` : ``">
                    <div>
                        {{ amenity.title }}
                    </div>
                </div>
            </div>
            <div class="w-full flex justify-end items-center bg-[#fff] p-[10px] gap-[10px] rounded-b-md">
                <div class="text-[#8a8383b2] text-lg p-[10px] hover:bg-[#f5f5f5] transition-all cursor-pointer" v-on:click="cancle">Cancel</div>
                <div class="text-[#e00] text-lg p-[10px] hover:bg-[#f5f5f5] transition-all cursor-pointer" v-on:click="saveChanges">Save Amenities</div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
import { apiBack } from '../../../axios';
export default {
    props:['path'],
    data(){
        return {
            display : false,
            pending : [],
            selected : [],
            all : [],
            deleted : false,
            class: '!border-[2px] bg-[#f5f5f5]',
        }
    },
    methods:{
        displayPopup(){
            this.display = !this.display;
        },
        cancle(){
            this.pending = [...this.selected];
            this.displayPopup()
        },
        togglePending($event,title,id){
            if(this.pending.findIndex(x => x.id == id) != -1){

                this.deleteFromPending(id)
            }
            else{

                this.addToPending(title,id)
            }
        },
        addToPending(title,id){
            this.pending.push({title:title,id:id});
            document.querySelector(`#amenity${id}`).classList.add('!border-[2px]')
            document.querySelector(`#amenity${id}`).classList.add('!bg-[#f5f5f5]')
            // document.querySelector(`#${id}`).classList.rem

        },
        saveChanges(){
            this.selected = [...this.pending];
            this.displayPopup();
            this.$emit('selected',this.selected);
        },
        deleteFromPending(id){
            let temp = [];
            temp = this.pending.filter((elmnt) => {
                if(elmnt.id == id){

                    document.querySelector(`#amenity${id}`).classList.remove('!border-[2px]')
                    document.querySelector(`#amenity${id}`).classList.remove('!bg-[#f5f5f5]')
                    return false
                }
                return true;
            })
            this.pending = temp;
        }
    },
    mounted(){
        apiBack.get(this.path)
        .then((response) => {
            // this.value = response.data.payload;
            let temp = [];
            response.data.payload.forEach(elmnt => {
                // let temp = {'id':elmnt.id,'title':elmnt.title};
                temp.push({'id':elmnt.id,'title':elmnt.title})
            })
            this.all = temp;
        })
        .catch((error) => {
            console.log(error);
        })
    }
}
</script>

<style>

</style>
