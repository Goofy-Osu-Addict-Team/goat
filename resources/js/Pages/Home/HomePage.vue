<script setup>
import { Head } from '@inertiajs/vue3';
import PageLayout from '@/Layouts/PageLayout.vue';
</script>

<template>
    <Head title="Home" />
    <PageLayout>
        <div class="pt-48 pb-20 lg:pt-56 xl:pt-64 xl:pb-28">
            <div class="max-w-screen-xl px-5 mx-auto">
                <div class="max-w-3xl mx-auto text-center">
                    <div class="text-5xl text-gray-900 dark:text-gray-100 md:text-6xl lg:text-7xl font-icon">
                        G<span class="text-3xl md:text-4xl lg:text-5xl">oofy</span> O<span
                            class="text-3xl md:text-4xl lg:text-5xl">su!</span> A<span
                            class="text-3xl md:text-4xl lg:text-5xl">ddicted</span>
                        T<span class="text-3xl md:text-4xl lg:text-5xl">eam</span>
                    </div>
                    <div class="mt-6 font-nunito">
                        <div class="text-lg text-gray-700 transition dark:text-gray-300 md:text-xl lg:text-2xl ">
                            Founded by <a href="https://osu.ppy.sh/users/35600324" target="_blank"
                                class="hover:underline text-amber-500">Xerillia</a>
                        </div>
                        <div class="mt-5 text-xl text-gray-600 dark:text-gray-400">"A group of silly people participating in osu!
                            tournaments"</div>
                        <div
                            class="flex flex-col items-center justify-center max-w-sm gap-4 mx-auto mt-6 sm:flex-row md:mt-8 lg:mt-10">
                            <a href="https://discord.gg/fNd2kB84dx" target="_blank"
                                class="inline-flex border group border-amber-500 focus:outline-none">
                                <span
                                    class="inline-flex items-center self-stretch justify-center w-full px-4 py-2 font-bold text-center text-white uppercase transition-transform transform dark:text-black text-md bg-amber-500 ring-1 ring-amber-500 ring-offset-1 ring-offset-amber-500 group-hover:-translate-y-1 group-focus:-translate-y-1">
                                    Join our server
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </PageLayout>
</template>
