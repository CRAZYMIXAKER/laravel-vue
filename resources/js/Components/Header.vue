<template>
    <header>
        <button v-if="user" @click="logout">Logout</button>
        <label v-else>
            <router-link :to="{name: 'register'}">Registration</router-link>
        </label>
        HEADER
    </header>
</template>

<script>
export default {
    name: 'Header',
    props: {
        user: [Array],
    },
    data() {
        return {
            user: window.Laravel.user,
        };
    },
    methods: {
        async logout() {
            await axios.post('/logout',
            ).then(() => {
                this.$router.push({ name: 'register' });
            }).catch(error => {
                console.log(error);
            });
        },
    },
};
</script>

<style lang="scss" scoped>

</style>
