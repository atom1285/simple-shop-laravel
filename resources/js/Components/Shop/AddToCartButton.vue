<template>
    <button
        class="btn pill"
        @click="addToCart"
    > Add to cart
    </button>
</template>

<script>
import {router} from '@inertiajs/vue3'

export default {
    name: "AddToCartButton",
    props: {
        item: null
    },
    methods: {
        addToCart() {
            router.post('/api/cart/add/' + this.item.barcode)
        }
    }
}
</script>

<style scoped>

</style>
