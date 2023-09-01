<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Card from "@/Components/Card.vue";
import LinkButton from "@/Components/LinkButton.vue";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-2 text-gray-900">
                    <LinkButton
                        label="New Project"
                        :href="route('projects.create')"
                    />
                    <h2 class="text-lg font-bold mt-2">Recent Projects</h2>
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
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-2 text-gray-900">
                    <h2 class="text-lg font-bold">Your Projects</h2>
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
