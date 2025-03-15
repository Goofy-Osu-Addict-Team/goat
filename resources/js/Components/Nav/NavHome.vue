<script setup>
import { Link } from '@inertiajs/vue3';
import GOAT from '../Icons/GOAT.vue';
</script>
<template>
    <Link :href="route('homepage')">
        <GOAT class="h-[60px] w-36 hover:bg-gray-200 hover:dark:bg-gray-800 px-3" />
    </Link>
</template>
