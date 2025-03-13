<script setup>
const props = defineProps({
    align: {
        type: String,
        default: 'left',
    },
    title: {
        type: String,
        default: 'title',
    },
    image: {
        type: String,
    },
    border: {
        type: Boolean,
        default: true,
    },
})
</script>

<template>
    <div :class="[align=='left' ? 'lg:flex-row' : 'lg:flex-row-reverse', border ? 'border-t-2 border-gray-300 dark:border-gray-700' : '']" class="flex flex-col justify-between gap-4 py-6 mx-4 lg:mx-12 lg:py-12 lg:gap-12 dark:text-white">
        <div :class="image ? 'lg:w-1/2' : 'w-max'">
            <div class="text-3xl lg:text-4xl font-icon">{{ title }}</div>
            <div class="mt-3 text-xl lg:text-2xl dark:text-gray-200">
                <slot />
            </div>
        </div>
        <div v-if="image" class="text-right lg:w-1/2 min-h-60">
            <img :src="image" class="inline border-2 rounded-md dark:border-gray-700">
        </div>
    </div>
</template>