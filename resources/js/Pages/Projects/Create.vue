<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Card from "@/Components/Card.vue";
import { Head, router } from "@inertiajs/vue3";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { reactive } from "vue";

const form = reactive({
    nama: "",
    deskripsi: "",
});

function submit() {
    router.post(route("projects.store"), form);
}
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
                <div class="card">
                    <Card>
                        <form
                            action=""
                            class="flex flex-col"
                            @submit.prevent="submit"
                        >
                            <div class="my-2 flex">
                                <input
                                    type="file"
                                    name=""
                                    id="file"
                                    class="hidden"
                                />
                                <label
                                    for="file"
                                    class="p-2 w-full bg-yellow-100 rounded"
                                    >Upload picture</label
                                >
                            </div>
                            <div class="flex my-2">
                                <input
                                    type="text"
                                    class="w-full border border-gray-400 rounded"
                                    placeholder="Nama Proyek"
                                    v-model="form.nama"
                                />
                            </div>
                            <div class="flex my-2">
                                <textarea
                                    name=""
                                    id=""
                                    cols="30"
                                    class="w-full border border-gray-400 rounded resize-none"
                                    placeholder="Deskripsi"
                                    v-model="form.deskripsi"
                                ></textarea>
                            </div>
                            <div>
                                <PrimaryButton type="submit"
                                    >Simpan</PrimaryButton
                                >
                            </div>
                        </form>
                    </Card>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped></style>
