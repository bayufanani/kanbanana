<script setup>
defineProps(["name"]);
</script>
<template>
    <input type="file" :name="name" />
</template>

<style scoped></style>
