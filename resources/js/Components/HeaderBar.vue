<script setup>
import { computed, inject, ref, Transition } from 'vue';
import { Link } from '@inertiajs/vue3';

const redirectURI = computed(() => encodeURIComponent(`${import.meta.env.VITE_REDIRECT_URI}`));
const clientID = computed(() => `${import.meta.env.VITE_DISCORD_CLIENT_ID}`);

const user = inject('user');

const popup = ref(false);
const togglePopup = () => popup.value = !popup.value;

</script>

<template>
    <div @click="togglePopup" v-if="popup" class="fixed z-30 w-full min-h-screen" />
    <div class="fixed top-0 z-50 flex h-[60px] shadow-md items-center w-full dark:text-white dark:bg-gray-950 rounded-b-xl">
        <div class="w-full h-full mx-auto text-md max-w-[90%] lg:max-w-[85%] 2xl:max-w-[55%] flex flex-row-reverse">
            <button @click="togglePopup" v-if="user" class="grid grid-cols-2 gap-1 px-2 cursor-pointer hover:dark:bg-gray-800 place-items-center">
                <img class="w-[36px] rounded-full aspect-square" :src="`https://cdn.discordapp.com/avatars/${user.id}/${user.avatar}.webp`" :alt="`${user.username}'s profile picture`">
                <div>{{ user.username }}</div>
            </button>
            <a v-if="!user" class="grid grid-cols-2 gap-1 px-2 hover:dark:bg-gray-800 place-items-center" :href="`https://discord.com/oauth2/authorize?response_type=code&client_id=${clientID}&scope=identify%20email%20guilds&redirect_uri=${redirectURI}`">
                <img class="w-[36px] rounded-full aspect-square" src="https://i.ibb.co.com/xhzCx5G/image-2025-01-08-174059189.png" alt="Unknown profile picture">
                <div>Guest</div>
            </a>
            <Transition
                enter="transition ease-in duration-100 transform"
                enterFrom="opacity-0 translate-y-0"
                enterTo="opacity-100 -translate-y-12"
            >
                <div v-if="popup" class="absolute w-48 z-40 rounded-md text-right shadow-md dark:text-white top-[60px] mt-1  border-2 border-slate-900 bg-slate-800">
                    <div class="flex flex-col rounded-md">
                        <Link as="button" :href="route('logout')" class="p-4 text-right text-red-500 hover:bg-slate-700">Logout</Link>
                    </div>
                </div>
            </Transition
           >
        </div>
    </div>
</template>

<style>
.v-enter-active,
.v-leave-active {
    transition: opacity 0.1s ease, translate 0.2s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
  translate: 0 -1rem;
}
</style>