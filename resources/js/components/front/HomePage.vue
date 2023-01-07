<template>
    <Landing />
    <Luxury />
    <Popular />
    <Developers />
    <Media />
    <Agents />
</template>

<script>
import Luxury from "./Luxury.vue";
import Landing from "./Landing.vue";
import Popular from "./Popular.vue";
import Developers from "./Developers.vue";
import Media from "./Media.vue";

import Agents from "./Agents.vue";
export default {
    components: {
        Landing,
        Luxury,
        Popular,
        Developers,
        Media,
        Agents,
    },
};
</script>

<style></style>
