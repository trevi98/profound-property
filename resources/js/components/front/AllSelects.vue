<template>
    <div class="max-w-[calc(50%+56px)] flex m-auto pb-3 relative">
        <SelectSearch
            :name="property"
            class="w-[calc(97%/4)]"
            @toggle="toggle"
            :state="active"
        >
            <div
                class="py-3 px-6 cursor-pointer hover:bg-primary-color hover:text-[#ffffff]"
                v-for="prop in propertyes"
                @click="activeElement"
            >
                <input type="radio" class="hidden" id="" :name="prop" />
                <label class="cursor-pointe" for="">{{ prop }}</label>
            </div>
        </SelectSearch>
        <!-- <SelectSearch
                name="Completion status"
                class="w-[calc(97%/4)] ml-[1%]"
            />
            <SelectSearch name="Min. Bedrooms" class="w-[calc(97%/4)] ml-[1%]">
                <option value="">1 Bedroom</option>
                <option value="" v-for="bed in bedrooms">
                    {{ bed }} Bedrooms
                </option>
            </SelectSearch>
            <SelectSearch name="Max. Bedrooms" class="w-[calc(97%/4)] ml-[1%]">
                <option value="">1 Bedroom</option>
                <option value="" v-for="bed in bedrooms">
                    {{ bed }} Bedrooms
                </option>
            </SelectSearch> -->
    </div>
    <!-- <div class="max-w-[calc(50%+56px)] flex m-auto pb-16 relative">
            <SelectSearch name="Buy" class="w-[calc(96%/4)]">
                <option value="">Rent</option></SelectSearch
            >
            <SelectSearch name="Min. Price" class="ml-[1%] w-[calc(72%/4)]">
                <option value="" v-for="m in max">{{ m }} $</option>
            </SelectSearch>
            <SelectSearch name="Max. Price" class="ml-[1%] w-[calc(72%/4)]">
                <option value="" v-for="m in max">
                    {{ m }} $
                </option></SelectSearch
            >
            <SelectSearch name="Min. Siza" class="ml-[1%] w-[calc(72%/4)]">
                <option value="" v-for="size in sizes">{{ size }} sqft</option>
            </SelectSearch>
            <SelectSearch name="Max. Size" class="ml-[1%] w-[calc(72%/4)]">
                <option value="" v-for="size in sizes">{{ size }} sqft</option>
            </SelectSearch>
        </div> -->
</template>

<script>
import SelectSearch from "./SelectSearch.vue";
export default {
    components: {
        SelectSearch,
    },
    data() {
        return {
            propertyes: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
            max: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
            bedrooms: [2, 3, 4, 5, 6, 7, 8, 9, 10],
            sizes: [500, 600, 700, 800, 900, 1000, 1500, 1700, 2300, 2500],
            active: false,
            property: "Select property type",
        };
    },
    methods: {
        toggle() {
            this.active = !this.active;
        },
        activeElement(event) {
            this.property = event.target.lastChild.innerHTML;
            this.active = false;
        },
    },
};
</script>

<style></style>
