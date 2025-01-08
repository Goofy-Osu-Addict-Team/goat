<script setup>
import HeaderBar from '@/Components/HeaderBar.vue';
</script>

<template>
    <HeaderBar/>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <slot />
    </div>
</template>