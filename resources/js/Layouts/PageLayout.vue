<script setup>
import HeaderBar from '@/Components/Layouts/HeaderBar.vue';
import FooterBar from '@/Components/Layouts/FooterBar.vue';
</script>

<template>
    <HeaderBar/>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <slot />
    </div>
    <FooterBar/>
</template>