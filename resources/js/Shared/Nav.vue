<script>
import {Link} from "@inertiajs/vue3";
import NavLink from "@/Shared/NavLink.vue";

export default {
    name: "Nav",
    components: {NavLink, Link}
}
</script>

<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <NavLink :active="$page.component === 'Home'" href="/">
                    Home
                </NavLink>
            </li>
            <li>
                <NavLink :active="$page.component === 'Users'" href="/users">
                    Users
                </NavLink>
            </li>
            <li>
                <NavLink :active="$page.component === 'Settings'" href="/settings">
                    Settings
                </NavLink>
            </li>
            <li>
                <Link as="button" class="text-blue-500 hover:underline" href="/lgout" method="post">Log Out</Link>
            </li>
        </ul>
    </nav>
</template>

<style scoped>

</style>
