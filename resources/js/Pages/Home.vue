<script setup>
import { Head } from '@inertiajs/vue3';
import Main from '@/Layouts/Main.vue';
</script>
<template>
    <Head title="Home"/>

    <Main>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Home</h2>
        </template>

        <div class="p-6 text-gray-900">Home</div>
    </Main>
</template>
