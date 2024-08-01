<template>
    <Link
        :class="{'font-bold underline': active}"
        class="text-blue-500 hover:underline"
    >
        <slot/>
    </Link>
</template>

<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: "NavLink",
    components: {Link},
    props: {
        active: Boolean
    }
}
</script>
