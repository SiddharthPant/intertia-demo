<script setup>
defineProps({
    links: Array,
});
</script>

<template>
    <div>
        <Component
            :is="link.url ? 'Link' : 'span'"
            v-for="link in links"
            :class="{
                'text-gray-500': !link.url,
                'font-bold underline': link.active,
            }"
            :href="link.url"
            class="px-1"
            v-html="link.label"
        />
    </div>
</template>
