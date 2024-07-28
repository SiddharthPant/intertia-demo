<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "Nav",
    components: {Link}
}
</script>

<template>
    <nav>
        <ul>
            <li><Link href="/">Home</Link></li>
            <li><Link href="/users">Users</Link></li>
            <li><Link href="/settings">Settings</Link></li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
