<script setup>
import { Head } from '@inertiajs/vue3';
import PageLayout from '@/Layouts/PageLayout.vue';
import HomeBox from '@/Components/HomeBox.vue';
</script>

<template>
    <Head title="" />
    <PageLayout>
        <div class="pt-48 pb-20 lg:pt-56 xl:pt-64 xl:pb-28">
            <div class="max-w-screen-xl px-5 mx-auto">
                <div class="max-w-3xl mx-auto text-center">
                    <div class="text-5xl text-gray-900 dark:text-gray-100 md:text-6xl lg:text-7xl font-icon">
                        G<span class="text-3xl md:text-4xl lg:text-5xl">oofy</span> O<span
                            class="text-3xl md:text-4xl lg:text-5xl">su</span> A<span
                            class="text-3xl md:text-4xl lg:text-5xl">ddict</span>
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
                            class="flex flex-col items-center justify-center gap-4 mx-auto mt-6 sm:flex-row md:mt-8 lg:mt-10">
                            <a href="https://discord.gg/KAfXBZkv2R" target="_blank"
                                class="inline-flex border group border-amber-500 focus:outline-none">
                                <span
                                    class="inline-flex items-center self-stretch justify-center w-full px-4 py-2 font-bold text-center text-white uppercase transition-transform transform dark:text-black text-md bg-amber-500 ring-1 ring-amber-500 ring-offset-1 ring-offset-amber-500 group-hover:-translate-y-1 group-focus:-translate-y-1">
                                    Join server
                                </span>
                            </a>
                            <a href="https://www.youtube.com/@goofyosuaddictteam/videos" target="_blank" class="inline-flex border border-amber-500 focus:outline-none group">
                                <span
                                    class="inline-flex items-center self-stretch justify-center w-full px-4 py-2 font-bold text-center uppercase transition-transform transform bg-gray-100 text-amber-500 dark:bg-slate-900 dark:text-amber-500 text-md ring-1 ring-amber-500 ring-offset-1 ring-offset-amber-500 group-hover:-translate-y-1 group-focus:-translate-y-1">
                                    Youtube
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-200 rounded-xl dark:bg-slate-800">
            <div class="flex flex-col justify-center xl:mx-auto gap-8 lg:gap-16 2xl:max-w-[60%]">
                <HomeBox title="The place to talk with cool people" image="https://i.ibb.co.com/7rZxtWH/image-2025-01-07-202255283.png" :border="false">
                    In our server, you'll be able to talk basically whatever you want! While our server may be small with less than 1000 members, I am proud to say we are quite the active community. You won't feel being left out in our server 😎
                </HomeBox>
                <HomeBox align="right" title="Nacho appreciation squad" image="https://i.ibb.co.com/VCpLXjG/image-2025-01-07-201507072.png">
                    <div class="flex flex-col flex-wrap w-16 gap-4 mt-3">
                        <img src="https://i.ibb.co.com/6Fq5Bcb/image-2025-01-07-210922152.png" alt="Nacho" class="min-w-[180px]">
                    </div>
                </HomeBox>
                <HomeBox title="Fun activities" image="https://i.ibb.co.com/xHj6QhW/image-2025-01-07-211236811.png">
                    <p>We do community-driven events to enjoy our time together and increase engagement! You can participate in one or be the one hosting it, your call <img class="inline w-[32px]" src="https://i.ibb.co.com/D5x0CwG/image-2025-01-07-210958990.png" alt=":3c"></p>
                    <p class="mt-4">For example, look at our <a href="https://www.youtube.com/watch?v=IFsdOG9SRtc&t=1039s" target="_blank" class="underline hover:text-amber-500">nightly karaoke</a> 🎤👀</p>
                </HomeBox>
            </div>
        </div>
    </PageLayout>
</template>
