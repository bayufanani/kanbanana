<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Card from "@/Components/Card.vue";
defineProps(["new_project_url"]);
</script>
<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Your Projects
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-2 text-gray-900">
                    <div class="flex flex-wrap">
                        <div v-for="item in 5" class="w-1/5 pr-2">
                            <Card>
                                {{ item }}
                            </Card>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped></style>
