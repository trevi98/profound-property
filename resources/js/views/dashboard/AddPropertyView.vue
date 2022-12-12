<template>
    <Header/>
    <div class="bg-[#f5f5f5] min-h-[100vh] absolute w-[100%] px-[5%] flex justify-between items-start gap-[5%]">

        <div class="w-[70%]">

            <div class="flex flex-col w-[100%] mx-auto justify-center items-start min-h-[120px] shadow-sm bg-[#fff] my-[20px] ">
                <div class="px-[20px] pt-[20px] text-lg w-[80%]">
                    Type
                </div>
                <div class="flex flex-col mx-auto justify-center items-center gap-[10px] h-full w-full my-[20px] mdMid:flex-row mdMid:gap-[60px] mdMid:h-[120px]">
                    <Iconcomp :data="[{title:'residential',value:'resiential',icon:icons[0]},{title:'commercial',value:'commercial',icon:icons[1]}]" @checked="handleCheck"/>
                    <div class="h-[90%] w-[1px] bg-[#000] mdMid:block hidden"></div>
                    <div class="h-[1px] w-[90%] bg-[#000] mt-[10px]  mdMid:hidden block"></div>
                    <Iconcomp :data="[{title:'Rent',value:'rent',icon:icons[0]},{title:'Sale',value:'buy',icon:icons[1]}]" @checked="priceView"/>
                </div>

            </div>

            <div class="w-[100%] mx-auto bg-[#fff] rounded-sm flex flex-col gap-[20px] shadow-sm">
                <div class="px-[20px] pt-[20px] text-lg">
                    Specifications
                </div>
                <div class="flex justify-between items-center gap-[5%] w-[90%] mx-auto h-full">
                    <div class="w-[45%] flex flex-col justify-center items-center gap-[30px]">
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Title Deed
                            </div>
                            <div class="w-full">
                                <input type="text" name="" id="" :class="inputClass">
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Size*
                            </div>
                            <div class="w-full">
                                <input type="text" name="" id="" :class="inputClass">
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Number of bathrooms
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Furnish type
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Tenure of the property
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Total plot size
                            </div>
                            <div class="w-full">
                                <input type="text" name="" id="" :class="inputClass">
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Built-up area
                            </div>
                            <div class="w-full">
                                <input type="text" name="" id="" :class="inputClass">
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Floor number
                            </div>
                            <div class="w-full">
                                <input type="text" name="" id="" :class="inputClass">
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Project status
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Layout type
                            </div>
                            <div class="w-full">
                                <input type="text" name="" id="" :class="inputClass">
                            </div>
                        </div>
                    </div>


                    <div class="w-[45%] flex flex-col justify-center items-center gap-[30px]">
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Property type
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Number of bedrooms
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Number of parking spaces
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Property developer
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Build year
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="YYYY" name="" id="" :class="inputClass">
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Plot number
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="" name="" id="" :class="inputClass">
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Building's  floors
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="" name="" id="" :class="inputClass">
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Occupancy
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Renovation type
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                DEWA number
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="" name="" id="" :class="inputClass">
                            </div>
                        </div>

                    </div>
                </div>
                <div>
                    <div :class="divInputClass" class="!w-[90%] mx-auto my-[20px]">
                            <div :class="labelClass">
                                Views
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="" name="" id="" :class="inputClass">
                            </div>
                        </div>
                </div>
            </div>

            <div class="flex flex-col w-[100%] mx-auto justify-center items-start min-h-[120px] shadow-sm bg-[#fff] my-[20px]">
                <div class="px-[20px] pt-[20px] text-lg">
                    Pricing
                </div>
                <div class="my-[20px] w-[90%] mx-auto" v-if="!priceBuy">
                    <div class="my-[5px]">
                        Rental Prices*
                    </div>
                    <PriceBox/>
                    <div class="flex justify-between items-center w-full gap-[5%] my-[20px]">
                        <div class="w-[45%] flex flex-col justify-center items-center gap-[30px] ">

                            <div :class="divInputClass">
                                <div :class="labelClass">
                                    Cheques
                                </div>
                                <div class="w-full">
                                    <select name="" id="" :class="selectClass">
                                        <option value="">test</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="w-[45%] flex flex-col justify-center items-center gap-[30px]">
                            <div :class="divInputClass">
                                <div :class="labelClass">
                                    Financial status
                                </div>
                                <div class="w-full">
                                    <select name="" id="" :class="selectClass">
                                        <option value="">test</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Service charge
                            </div>
                            <div class="w-full">
                                <input type="text" name="" id="" :class="inputClass">
                            </div>
                        </div>
                    <div>

                    </div>
                </div>
                <div v-else class="my-[20px] w-[100%] px-[20px] mx-auto">
                    <div>
                        <div :class="divInputClass">

                            <div class="w-full">
                                <input type="text" name="" id="" :class="inputClass" placeholder="Price in AED*" class="bg-[#f5f5f5] w-[45%] h-[50px] p-[10px]">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-start items-center gap-[5%] ">
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Service charges
                            </div>
                            <div class="w-full">
                                <input type="text" placeholder="" name="" id="" :class="inputClass">
                            </div>
                        </div>
                        <div :class="divInputClass">
                            <div :class="labelClass">
                                Financial status
                            </div>
                            <div class="w-full">
                                <select name="" id="" :class="selectClass">
                                    <option value="">test</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-col w-[100%] mx-auto justify-center items-start min-h-[120px] h-full shadow-sm bg-[#fff] my-[20px]">
                <div class="px-[20px] pt-[20px] text-lg">
                    Description
                </div>
                <div class="flex flex-col justify-center items-center w-[90%] mx-auto my-[20px] h-full gap-[50px]">

                    <div :class="divInputClass">
                        <div :class="labelClass">
                            Title*
                        </div>
                        <div class="w-full">
                            <input type="text" placeholder="" name="" id="" :class="inputClass">
                        </div>
                    </div>
                    <div :class="divInputClass" class="!h-full">
                        <div :class="labelClass">
                            Description*
                        </div>
                        <div class="w-full h-full">
                            <textarea type="text" placeholder="" name="" id="" :class="inputClass" class="transition-[height] focus:h-[350px] h-[150px]"></textarea>
                        </div>
                    </div>

                </div>

            </div>
            <div class="flex flex-col w-[100%] mx-auto justify-center items-start min-h-[120px] h-full shadow-sm bg-[#fff] my-[20px]">
                <div class="px-[20px] pt-[20px] text-lg">
                    Select Amenities
                </div>
                <div class="w-[90%] mx-auto my-[20px] h-full gap-[50px]">
                    <SelectMultiPopup path="/amenities" @selected="selected"/>
                </div>

            </div>
        </div>
        <div class=" w-[30%] mt-[20px] flex flex-col gap-[30px]">
            <div class="flex flex-col gap-[20px]">
                <div class="border-b-[1px] border-[#000] w-full py-[5px]">
                    Last updated: 28/5/1998
                </div>
                <div class="border-b-[1px] border-[#000] w-full py-[5px]">
                    Creation date: 28/5/1998
                </div>
                <div class="border-b-[1px] border-[#000] w-full py-[5px]">
                    Created by: Agent
                </div>
            </div>

            <Select3d lable="Availability" :data="selectData"/>

            <div class="flex flex-col gap-[5px]">
                <div class="text-lg pb-[5px]">

                    Property permit
                </div>
                <div>
                    Select your license type
                </div>
                <div class="flex flex-col gap-[5px]">
                    <div class="flex gap-[10px]">
                        <input type="radio" name="permit" value="rera">
                        <div>
                            RERA
                        </div>
                    </div>
                    <div class="flex gap-[10px]">
                        <input type="radio" name="permit" value="dtcm">
                        <div>
                            DTCM
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
</template>

<script>
import Iconcomp from '../../components/dashboard/new_project/Iconcomp.vue';
import Header from '../../components/dashboard/Header.vue';
import MultiSelect from '../../components/MultiSelect.vue';
import PriceBox from '../../components/dashboard/new_project/PriceBox.vue';
import SelectMultiPopup from '../../components/dashboard/new_project/SelectMultiPopup.vue';
import Select3d from '../../components/dashboard/new_project/Select3d.vue';
export default {
    components:{Iconcomp,Header,MultiSelect,PriceBox,SelectMultiPopup,Select3d},
    data(){
        return {
            icons:[
                `<svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M11 39h7.5V26.5h11V39H37V19.5L24 9.75 11 19.5Zm-3 3V18L24 6l16 12v24H26.5V29.5h-5V42Zm16-17.65Z"/></svg>`,
                `<svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 42V14.25h8.25V6h19.5v16.5H42V42H26.65v-8.25h-5.3V42Zm3-3h5.25v-5.25H9Zm0-8.25h5.25V25.5H9Zm0-8.25h5.25v-5.25H9Zm8.25 8.25h5.25V25.5h-5.25Zm0-8.25h5.25v-5.25h-5.25Zm0-8.25h5.25V9h-5.25Zm8.25 16.5h5.25V25.5H25.5Zm0-8.25h5.25v-5.25H25.5Zm0-8.25h5.25V9H25.5ZM33.75 39H39v-5.25h-5.25Zm0-8.25H39V25.5h-5.25Z"/></svg>`,

            ],
            divInputClass : "flex flex-col justify-between items-start gap-[5px] w-full h-[70px]",
            inputClass:`focus:border-b-[2px] focus:outline-none transition-border h-[20px] border-b-[1px] w-full border-[#0b3a43] p-[10px]`,
            labelClass:"text-[#0b3a43]",
            selectClass:"cursor-pointer border-b-[1px] border-[#0b3a43] w-full bg-[#fff] p-[10px]",
            priceBuy:true,
            selectData : [
                {title:'Available',id:1},
                {title:'Under offer',id:2},
                {title:'Reserved',id:3},
                {title:'Rented',id:4},
                {title:'Sold',id:5},
            ],

        }
    },
    methods:{
        handleCheck($event){
            console.log($event)
        },
        addAvailableUnites(){

        },
        selected(val){
        },
        priceView(val){
            console.log(val)
            if (val == 'rent'){
                this.priceBuy = false;
            }
            else{
                this.priceBuy = true;
            }
        }
    }
}
</script>

<style>

</style>
