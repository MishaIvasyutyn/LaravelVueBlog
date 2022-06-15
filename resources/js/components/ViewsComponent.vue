<template>
    <span class="badge bg-danger">{{viewsNumber}} <i class="fa fa-eye"></i> </span>
</template>

<script>
export default {
    name: "ViewsComponent",
    computed: {
        viewsNumber() {
            return this.$store.getters.getArticleViews;
        }
    },
    mounted() {
        console.log("ViewsComponent mounted");
    }

}
</script>

<style scoped>

</style>
