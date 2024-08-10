<script setup>
import { useForm } from "@inertiajs/vue3";

defineOptions({
    layout: null,
});

let form = useForm({
    email: "",
    password: "",
});

let submit = () => {
    form.post("/login");
};
</script>

<template>
    <Head title="Login Page" />
    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-xl max-w-d mx-auto border">
            <h1 class="text-3xl mb-6">Login</h1>
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                    >
                        Email
                    </label>
                    <input
                        id="email"
                        v-model="form.email"
                        class="border border-gray-300 rounded p-2 w-full"
                        name="email"
                        required
                        type="email"
                    />
                    <div
                        v-if="form.errors.email"
                        class="text-red-500 text-xs mt-1"
                        v-text="form.errors.email"
                    ></div>
                </div>
                <div class="mb-6">
                    <label
                        class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                    >
                        Password
                    </label>
                    <input
                        id="password"
                        v-model="form.password"
                        class="border border-gray-300 rounded p-2 w-full"
                        name="password"
                        type="password"
                    />
                    <div
                        v-if="form.errors.password"
                        class="text-red-500 text-xs mt-1"
                        v-text="form.errors.password"
                    ></div>
                </div>
                <div class="mb-6">
                    <button
                        :disabled="form.processing"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        type="submit"
                    >
                        Log In
                    </button>
                </div>
            </form>
        </section>
    </main>
</template>
