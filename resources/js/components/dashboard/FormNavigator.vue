<template>
    <div class="w-[80%] mx-auto bg-[#fff] flex justify-between items-center h-[20px] rounded-md py-[20px] mb-[40px]">
        <div class="h-[40px] w-[80px] bg-[#0b3841] text-[#fff] rounded-sm text-lg flex justify-center items-center cursor-pointer" @click="back" :class="{disabled:disabled}">
            <div>
                Back
            </div>
        </div>
        <div class="h-[40px] w-[80px] bg-[#0b3841] text-[#fff] rounded-sm text-lg flex justify-center items-center cursor-pointer"  @click="next">
            <div>
                {{ Next }}
            </div>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex'
export default {
    props:['submit'],
    data(){
        return{
            Next: 'Next'
        }
    },
    methods:{
        next(){
            this.$emit('nav','next')
        },
        back(){
            this.$emit('nav','back')
        }
    },
    computed:{
        ...mapState({
            disabled: state => {
                if(state.Nav.current == 'step1'){
                    return true
                }
                return false
            }
        }),
    },
    mounted(){
        if(this.submit == true){
            this.Next = 'Submit'
        }
    }

}
</script>

<style>
    .disabled{
        opacity:0.3;
        cursor:not-allowed !important;
    }
</style>
