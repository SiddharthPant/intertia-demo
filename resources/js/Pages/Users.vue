<script setup>
import {Link} from '@inertiajs/vue3'

defineProps({
    time: String
})
</script>

<template>
    <h1 class="text-4xl font-bold">Users</h1>
    <div style="margin-top: 2000px">
        <p>The current time is {{ time }}.</p>
        <Link class="text-blue-500" href="/users" preserve-scroll>Refresh</Link>
    </div>
</template>
