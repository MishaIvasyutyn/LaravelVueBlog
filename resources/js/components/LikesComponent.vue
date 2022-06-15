<template>
    <span @click="addLike" class="badge likesButton" :class="isLiked ? 'bg-primary' : 'bg-danger'">{{ likesNumber }} <i class="fa fa-thumbs-up"></i> </span>
</template>

<script>
export default {
    name: "LikesComponent",
    computed: {
        isLiked() {
            return this.$store.state.likeIt;
        },
        likesNumber() {
            return this.$store.getters.getArticleLikes;
        },
    },
    methods: {
        addLike() {
            this.$store.dispatch('addLike', {
                slug: this.$store.state.slug,
                increment: this.isLiked
            });
        }
    },

    mounted() {
        console.log('LikesComponent mounted');
    }
}
</script>

<style scoped>
.likesButton{
    cursor: pointer;
}
</style>
