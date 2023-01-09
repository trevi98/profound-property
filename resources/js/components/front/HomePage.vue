<template>
    <LandingHome />
    <Luxury />
    <Popular />
    <Developers />
    <Media />
    <Agents />
</template>

<script>
import Luxury from "./Luxury.vue";
import LandingHome from "./LandingHome.vue";
import Popular from "./Popular.vue";
import Developers from "./Developers.vue";
import Media from "./Media.vue";

import Agents from "./Agents.vue";
export default {
    components: {
        LandingHome,
        Luxury,
        Popular,
        Developers,
        Media,
        Agents,
    },
};
</script>

<style></style>
