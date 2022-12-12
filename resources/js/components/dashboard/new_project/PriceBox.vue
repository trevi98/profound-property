<template>
    <div class="flex justify-between items-center gap-[30px]">
        <div :class="containerClass">
            <div class="text-xl pt-[25px] text-[#0b3a43]">
                YEAR
            </div>
            <div>
                <input type="text" :class="inputClass" placeholder="Price in AED">
            </div>
            <div :class="radioDivClass">
                <input type="radio" name="radio" id="" value="year">
                <div>
                    Default price
                </div>
            </div>
        </div>
        <div :class="containerClass">
            <div class="text-xl pt-[25px] text-[#0b3a43]">
                MONTH
            </div>
            <div>
                <input type="text" :class="inputClass" placeholder="Price in AED">
            </div>
            <div :class="radioDivClass">
                <input type="radio" name="radio" id="" value="year">
                <div>
                    WEEK
                </div>
            </div>
        </div>
        <div :class="containerClass">
            <div class="text-xl pt-[25px] text-[#0b3a43]">
                YEAR
            </div>
            <div>
                <input type="text" :class="inputClass" placeholder="Price in AED">
            </div>
            <div :class="radioDivClass">
                <input type="radio" name="radio" id="" value="year">
                <div>
                    Default price
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            containerClass: "flex flex-col justify-center items-center w-[170px] border-[2px] border-solid gap-[20px] p-[10px] rounded-sm",
            inputClass:"w-full h-[50px] bg-[#f5f5f5] border-b-[1px] border-[#0b3a43] focus:outline-none p-[10px] placeholder:text-[#0b3a43b3]",
            radioDivClass:"flex justify-start items-center gap-[10px]",


        }
    }

}
</script>

<style>

</style>
