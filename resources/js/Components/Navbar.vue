<template>
    <div
        v-if="isHomePage || isLoginPage || isRegisterPage"
        class="p-6 text-right z-10 bg-gray-200 w-full"
    >
        <Link
            v-if="user"
            :href="route('dashboard')"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
        >
            Dashboard
        </Link>
        <div v-else>
            <Link
                v-if="!isLoginPage"
                :href="route('login')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
            >
                Log in
            </Link>
            <Link
                v-if="!isRegisterPage"
                :href="route('register')"
                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
            >
                Register
            </Link>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
    components: { Link },
    computed: {
        user() {
            return window.Laravel?.user;
        },
        isHomePage() {
            return window.location.pathname === '/';
        },
        isLoginPage() {
            return window.location.pathname === '/login';
        },
        isRegisterPage() {
            return window.location.pathname === '/register';
        },
    },
};
</script>
