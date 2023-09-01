<script setup>
defineProps({
    label: {
        type: String,
        required: true,
    },
    href: {
        type: String,
    },
});
</script>
<template>
    <a
        :href="href"
        class="inline-block py-2 px-4 rounded-full border-yellow-400 border hover:bg-yellow-400 cursor-pointer"
    >
        {{ label }}
    </a>
</template>

<style scoped></style>
