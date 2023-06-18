<template>
    <Head title="Catalog"/>
    <Layout>
        <h1> Catalog </h1>
        <div class="items">
            <Item v-for="item in items" :item="item" />
        </div>
    </Layout>
</template>

<script>
import Item from '@/Components/Shop/Item.vue'

export default {
    name: "Catalog",
    components: {
        Item
    },
    props: {
        data: null
    },
    computed: {
        items(){
            return this.data.data
        }
    }
}
</script>

<style scoped>

.items {
    @apply grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4;
}

</style>
