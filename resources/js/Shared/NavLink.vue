<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    active: Boolean,
})
</script>

<template>
    <Link
        :class="{'font-bold underline': active}"
        class="text-blue-500 hover:underline"
    >
        <slot/>
    </Link>
</template>
