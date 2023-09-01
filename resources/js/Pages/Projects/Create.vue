<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Card from "@/Components/Card.vue";
import { Head } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
</script>
<template>
    <Head title="Projects" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create New Project
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-2 text-gray-900">
                    <form action="" class="flex flex-col">
                        <input type="file" name="" id="" />
                        <input type="text" />
                        <textarea name="" id="" cols="30"></textarea>
                        <div>
                            <PrimaryButton type="submit">Simpan</PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped></style>
