<script setup>
import { computed } from 'vue';

const thisYear = computed(() => (new Date().getFullYear()))
</script>
<template>
    <div class="w-full py-4 text-sm text-center bg-gray-100 dark:text-white dark:bg-gray-900">
        <div class="flex justify-center gap-4 underline underline-offset-2">
            <a href="https://osu.ppy.sh/teams/149" class="dark:hover:text-amber-400 hover:text-amber-500" target="_blank">Team</a>
            <a href="https://discord.gg/KAfXBZkv2R" class="dark:hover:text-amber-400 hover:text-amber-500" target="_blank">Discord</a>
            <a href="https://www.youtube.com/@goofyosuaddictteam/videos" class="dark:hover:text-amber-400 hover:text-amber-500" target="_blank">YouTube</a>
        </div>
        <p class="text-gray-500 dark:text-gray-400">&copy Goofy Osu Addict Team 2024 - {{ thisYear }}</p>
    </div>
</template>