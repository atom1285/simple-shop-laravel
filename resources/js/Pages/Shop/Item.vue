<template>
    <Head title="Item"/>
    <Layout>
        <div class="grid my-10">
            <div class="grid grid-cols-4 gap-5  ">
                <div class="col-span-4">
                    <h1 class="h1 text-white text-center"> Item </h1>
                </div>
                <div class="img-div col-span-2 flex justify-center">
                    <img src="./../../../assets/img/placeholder.jpg" class="h-5/6">
                </div>
                <div class="info-div col-span-2 grid grid-cols-2 grid-rows-4">
                    <p class="text-white col-span-2"> {{ item.description }} </p>
                    <div class="price-div flex justify-center items-center">
                        <p class="text-2xl text-white text-center"> {{ item.price }}€ </p>`
                    </div>
                    <div class="addtocart-div flex justify-center items-center">
                        <AddToCartButton :item="item"/>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import AddToCartButton from "@/Components/Shop/AddToCartButton.vue";

export default {
    name: "Item",
    components: {
        AddToCartButton
    },
    props: {
        data: null
    },
    computed: {
        item() {
            return this.data.data
        }
    }

}
</script>

<style scoped>



</style>
