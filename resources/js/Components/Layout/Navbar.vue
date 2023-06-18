<template>
    <nav class="navbar">
        <ApplicationLogo class="h-12" />
        <div class="links">
            <NavLink class="navlink" href="/">Home</NavLink>
            <NavLink class="navlink" href="/catalog">Catalog</NavLink>
            <NavLink class="navlink" href="/discount">Discount</NavLink>
        </div>
        <div class="flex md:hidden">
            <button id="hamburger" @click="toggle()">
                <i class="icon bi-list toggle block"></i>
                <i class="icon bi-x toggle hidden"></i>
            </button>
        </div>
        <div class="user">

        </div>
        <!-- logo -->
        <!-- hamburger -->
        <!-- links -->
        <!-- cta -->
    </nav>
</template>

<script>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import NavLink from "@/Components/Layout/nav/NavLink.vue";

export default {
    name: "Navbar",
    components: {
        ApplicationLogo,
        NavLink
    },
    methods: {
        toggle() {

        }
    }
}
</script>

<style scoped>

.navbar {
    @apply w-full flex flex-wrap items-center justify-between px-5 py-2 bg-primary;
}

.links {
    @apply md:flex w-fit w-1/4 flex flex-col md:flex-row md:justify-between md:items-center hidden;
}

.user {
    @apply hidden md:flex;
}

</style>
