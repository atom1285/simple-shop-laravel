<template>
    <Navbar />
    <div class="main">
        <slot />
    </div>
</template>

<script>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import Navbar from "@/Components/Layout/Navbar.vue";

export default {
    name: "Layout.vue",
    components: {
        Navbar,
        ApplicationLogo,
        Link
    },
}
</script>

<style scoped>

.main {
    @apply  min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900 px-14;
}

</style>
