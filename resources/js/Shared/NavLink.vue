<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    active: Boolean,
})
</script>

<template>
    <Link
        :class="{'font-bold underline': active}"
        class="text-black hover:underline"
    >
        <slot/>
    </Link>
</template>
