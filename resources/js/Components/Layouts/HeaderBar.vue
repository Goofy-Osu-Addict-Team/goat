<script setup>
import NavHome from '../Nav/NavHome.vue';
import UserInfo from '../User/UserInfo.vue';
</script>

<template>
    <div class="fixed top-0 z-50 h-[60px] shadow-md w-full bg-gray-50 dark:text-white dark:bg-gray-950">
        <div class="max-w-[90%] lg:max-w-[85%] 2xl:max-w-[55%] items-center flex h-full mx-auto">
            <NavHome />
            <UserInfo />
        </div>
    </div>
</template>
