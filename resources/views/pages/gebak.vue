<script setup lang="ts">
import HeaderNav from '@/views/components/header-nav.vue'

defineProps<{
	versions: {
		php: string
		laravel: string
	}
}>()
</script>

<template layout>
	<HeaderNav />
    <h2 class="">Home > Gebak</h2>
</template>