<template>
    <header>
        <button v-if="user" @click="logout">Logout</button>
        <div v-else>
            <router-link v-show="isRegisterRoute" :to="{name: 'register'}">Registration</router-link>
            <router-link v-show="isLoginRoute" :to="{name: 'login'}">Login</router-link>
        </div>
    </header>
</template>

<script>
export default {
    name: 'Header',
    // props: {
    //     user: [Array],
    // },
    data() {
        return {
            user: window.Laravel.user,
            isLoginRoute: false,
            isRegisterRoute: false,
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
        checkCurrentRoute() {
            this.isLoginRoute = '/login' !== window.location.pathname;
            this.isRegisterRoute = '/register' !== window.location.pathname;
        },
    },
    watch: {
        '$route'(to, from) {
            this.checkCurrentRoute();
        },
    },
    mounted() {
        this.checkCurrentRoute();
    },
};
</script>

<style lang="scss" scoped>

</style>
