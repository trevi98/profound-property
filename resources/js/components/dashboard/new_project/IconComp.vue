<template>
  <div class="flex gap-[40px] ">

    <div class="flex flex-col w-[100px] py-[2px] justify-center items-center cursor-pointer hover:bg-[#d0dade] transition-all" @click="handleClick(data[0].value,1)">
        <div :class="classes.opacity1">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m10.55 15.7 6.2-6.2-.5-.5-5.7 5.7-2.85-2.85-.5.5Zm1.45 5q-1.8 0-3.387-.688-1.588-.687-2.763-1.862-1.175-1.175-1.863-2.763Q3.3 13.8 3.3 12t.687-3.388Q4.675 7.025 5.85 5.85t2.763-1.863Q10.2 3.3 12 3.3t3.388.687q1.587.688 2.762 1.863t1.863 2.762Q20.7 10.2 20.7 12q0 1.8-.687 3.387-.688 1.588-1.863 2.763-1.175 1.175-2.762 1.862Q13.8 20.7 12 20.7Zm0-.7q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4 8.65 4 6.325 6.325 4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
        </div>
        <div>
           <div v-html="data[0].icon">
           </div>
        </div>
        <div>
            {{ data[0].title }}
        </div>
    </div>

    <div class="flex flex-col justify-center items-center cursor-pointer hover:bg-[#d0dade] transition-all w-[100px] py-[2px]" @click="handleClick(data[1].value,2)">
        <div :class="classes.opacity2">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24"><path d="m10.55 15.7 6.2-6.2-.5-.5-5.7 5.7-2.85-2.85-.5.5Zm1.45 5q-1.8 0-3.387-.688-1.588-.687-2.763-1.862-1.175-1.175-1.863-2.763Q3.3 13.8 3.3 12t.687-3.388Q4.675 7.025 5.85 5.85t2.763-1.863Q10.2 3.3 12 3.3t3.388.687q1.587.688 2.762 1.863t1.863 2.762Q20.7 10.2 20.7 12q0 1.8-.687 3.387-.688 1.588-1.863 2.763-1.175 1.175-2.762 1.862Q13.8 20.7 12 20.7Zm0-.7q3.35 0 5.675-2.325Q20 15.35 20 12q0-3.35-2.325-5.675Q15.35 4 12 4 8.65 4 6.325 6.325 4 8.65 4 12q0 3.35 2.325 5.675Q8.65 20 12 20Zm0-8Z"/></svg>
        </div>
        <div>
            <div v-html="data[1].icon">

            </div>
        </div>
        <div>
            {{ data[1].title }}
        </div>
    </div>
  </div>
</template>

<script>
export default {
    props:['data'],
    data(){
        return {
            clicked:0,
            classes:{
                opacity1:'opacity-0',
                opacity2:'opcaity-1'
            }
        }
    },
    methods:{
        handleClick(val,elmnt){
            // console.log()
            if(elmnt == 1){
                this.classes.opacity1 = 'opacity-1'
                this.classes.opacity2 = 'opacity-0'
            }else{
                this.classes.opacity1 = 'opacity-0'
                this.classes.opacity2 = 'opacity-1'
            }

            this.$emit('checked',val)
        },


    },
    mounted(){
        this.handleClick(this.data[0].value,1)
    }
}
</script>


