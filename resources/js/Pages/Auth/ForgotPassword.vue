<template>
    <div>
        <div class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset
            link that will allow you to choose a new one.
        </div>

        <!--         Session Status -->
        <!--        <x-auth-session-status class="mb-4" :status="session('status')"/>-->

        <form method="POST">
            <!-- Email Address -->
            <div>
                <label for="email">Email</label>
                <input
                    id="email"
                    v-model="form.email"
                    autofocus
                    class="block mt-1 w-full"
                    required
                    type="email"/>
                <label v-if="form.errors.email" class="mt-2">{{ form.errors.email[0] }}</label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button @click.prevent="forgotPassword">Email Password Reset Link</button>
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
            },
        };
    },
    methods: {
        async forgotPassword() {
            await axios.post('/forgot-password', {
                email: this.form.email,
            }).then(res => {
                console.log(res);
            }).catch(error => {
                this.form.errors = error.response.data.errors;
                console.log(error.response.data.errors);
            });
        },
    },
};
</script>
