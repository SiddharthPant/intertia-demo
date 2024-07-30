<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "Nav",
    components: {Link}
}
</script>

<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li><Link href="/" class="text-blue-500 hover:underline">Home</Link></li>
            <li><Link href="/users" class="text-blue-500 hover:underline" >Users</Link></li>
            <li><Link href="/settings" class="text-blue-500 hover:underline" >Settings</Link></li>
            <li><Link href="/lgout" class="text-blue-500 hover:underline"  method="post" as="button">Log Out</Link></li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
