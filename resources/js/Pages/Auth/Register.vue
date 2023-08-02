<template>
    <div>
        <h1>Registration</h1>
        <form @submit.prevent="registerUser">
            <!-- Name -->
            <div>
                <label for="name">Name</label>
                <input
                    id="name"
                    v-model="form.name"
                    autocomplete="name"
                    autofocus
                    class="block mt-1 w-full"
                    name="name"
                    required
                    type="text"/>
                <label v-if="form.errors.name" class="mt-2">{{ form.errors.name[0] }}</label>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">Email</label>
                <input
                    id="email"
                    v-model="form.email"
                    autocomplete="username"
                    class="block mt-1 w-full"
                    name="email"
                    required
                    type="email">
                <label v-if="form.errors.email" class="mt-2">{{ form.errors.email[0] }}</label>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">Password</label>
                <input
                    id="password"
                    v-model="form.password"
                    autocomplete="new-password"
                    class="block mt-1 w-full"
                    required
                    type="password">
                <label v-if="form.errors.password" class="mt-2">{{ form.errors.password[0] }}</label>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation">Confirm Password</label>
                <input
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    autocomplete="new-password"
                    class="block mt-1 w-full"
                    name="password_confirmation"
                    required
                    type="password">
            </div>

            <div class="flex items-center justify-end mt-4">
                <router-link
                    :to="{name: 'login'}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Already registered?
                </router-link>
                <button class="ml-4" type="submit">Register</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                errors: [],
            },
        };
    },
    methods: {
        async registerUser() {
            await axios.post('/register', {
                name: this.form.name,
                email: this.form.email,
                password: this.form.password,
                password_confirmation: this.form.password_confirmation,
            }).then(() => {
                this.$router.push({ name: 'home' });
            }).catch(error => {
                this.form.errors = error.response.data.errors;
                console.log(error.response.data.errors);
            });
        },
    },
    computed: {
        user: () => {
            console.log(window.Laravel.user);
            // return window.Laravel.user || null;
        },
    },
};
</script>
