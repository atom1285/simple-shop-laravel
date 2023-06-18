<template>

    <div class="card grid" @click="routeToItemPage">
        <h1 class="h4 text-center mb-1"> {{ item.name }} </h1>
        <img src="./../../../assets/img/placeholder.jpg">
        <div class="grid grid-cols-2 mt-8 mb-4">
            <div class="col-span-1">
                <p class="text-2xl text-center"> {{ item.price }}€ </p>
            </div>
            <div class="col-span-1">
                <button class="btn btn" @click="console.log('test2')"> Add to cart </button>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    name: "Item",
    props: {
        item: null
    },
    methods: {
        routeToItemPage(){
            l
        }
    }
}
</script>

<style scoped>

.card {
    @apply bg-blue-200 text-white py-2 px-4 rounded-lg shadow-lg;
}

</style>
