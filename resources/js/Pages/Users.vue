<template>
    <Layout>
        <h1 class="text-4xl font-bold">Users</h1>
    </Layout>
    <div style="margin-top: 2000px">
        <p>The current time is {{ time }}.</p>
        <Link class="text-blue-500" href="/users" preserve-scroll>Refresh</Link>
    </div>
</template>

<script>
import {Link} from '@inertiajs/vue3'
import Layout from "@/Shared/Layout.vue";

export default {
    components: {Layout, Link},

    props: {time: String},
}

</script>
