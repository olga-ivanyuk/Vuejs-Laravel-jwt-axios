<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" v-model="name" placeholder="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" placeholder="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" placeholder="job" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="update" type="submit" value="Update" class="btn btn-primary">
        </div>
    </div>
</template>

<script>

export default {
    name: "Edit",

    data() {
        return {
            id: null,
            name: null,
            age: null,
            job: null
        }
    },

    mounted() {
        this.id = this.$route.params.id;
        this.getPerson(this.id);
    },

    methods: {
        getPerson() {
            axios.get(`/api/people/${this.id}`)
                .then( res => {
                    this.name = res.data.data.name;
                    this.age = res.data.data.age;
                    this.job = res.data.data.job;
                })
        },
        update(){
            axios.patch(`/api/people/${this.id}`, {
                name: this.name,
                age: this.age,
                job: this.job
            })
                .then(res => {
                    this.$router.push({name: 'person.show'});
                })
        }
    },
    computed: {
        isDisabled(){
            return this.name && this.age && this.job
        }
    }
}
</script>

<style scoped>

</style>
