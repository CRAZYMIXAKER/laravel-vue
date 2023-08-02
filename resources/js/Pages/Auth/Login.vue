<template>
    <div>
        <h1>Login</h1>
        <!-- Session Status -->
        <!--            <x-auth-session-status class="mb-4" :status="session('status')" />-->

        <form method="POST">
            <!-- Email Address -->
            <div>
                <label for="email">Email</label>
                <input
                    id="email"
                    v-model="form.email"
                    autocomplete="username"
                    autofocus
                    class="block mt-1 w-full"
                    required
                    type="email"/>
                <label v-if="form.errors.email" class="mt-2">{{ form.errors.email[0] }}</label>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password">Password</label>

                <input
                    id="password"
                    v-model="form.password"
                    autocomplete="current-password"
                    class="block mt-1 w-full"
                    required
                    type="password"/>
                <label v-if="form.errors.password" class="mt-2">{{ form.errors.password[0] }}</label>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label class="inline-flex items-center" for="remember_me">
                    <input
                        id="remember_me"
                        v-model="form.remember"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                        type="checkbox">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <!--                            @if (Route::has('password.request'))-->
                <router-link
                    :to="{name: 'password.request'}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Forgot your password?
                </router-link>
                <!--                            @endif-->

                <button class="ml-3" @click.prevent="loginUser">Log in</button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                errors: [],
                email: '',
                password: '',
                remember: false,
            },
        };
    },
    methods: {
        async loginUser() {
            await axios.post('/login', {
                email: this.form.email,
                password: this.form.password,
                remember: this.form.remember,
            }).then(res => {
                console.log(res);
                this.$router.push({ name: 'home' });
            }).catch(error => {
                this.form.errors = error.response.data.errors;
                console.log(error.response.data.errors);
            });
        },
    },
};
</script>
