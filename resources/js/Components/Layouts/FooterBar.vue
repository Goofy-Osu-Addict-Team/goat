<script setup>
import { computed } from 'vue';

const thisYear = computed(() => (new Date().getFullYear()))
</script>
<template>
    <div class="w-full py-4 text-sm text-center text-white bg-gray-900">
        <div class="flex justify-center gap-4 underline underline-offset-2">
            <a href="https://osu.ppy.sh/teams/149" class="hover:text-amber-400" target="_blank">Team</a>
            <a href="https://discord.gg/KAfXBZkv2R" class="hover:text-amber-400" target="_blank">Discord</a>
            <a href="https://www.youtube.com/@goofyosuaddictteam/videos" class="hover:text-amber-400" target="_blank">YouTube</a>
        </div>
        <p class="text-gray-400">&copy Goofy Osu Addict Team 2024 - {{ thisYear }}</p>
    </div>
</template>