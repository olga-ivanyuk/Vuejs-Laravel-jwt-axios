<template>
    <div>
        <div>
            <router-link :to="{ name: 'person.index' }" class="btn btn-success mb-3">People</router-link>|
            <router-link :to="{ name: 'person.create' }" class="btn btn-success mb-3">Add</router-link>
            <!--       <router-link :to="{ name: 'Register' }">Register</router-link> |-->
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Index.vue"
}
</script>

<style scoped>

</style>
