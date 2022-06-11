<script setup lang="ts">
import HeaderNav from '@/views/components/header-nav.vue';
import MainDagelijks from '@/views/components/main-dagelijks.vue';
import MainSpecial from '../components/main-special.vue';
import About from '../components/about.vue';
import Info from '../components/info.vue';
import FooterNav from '../components/footer-nav.vue';


defineProps<{
	versions: {
		php: string
		laravel: string
	}
}>()
</script>

<template layout>
	<HeaderNav />

	<MainDagelijks />

	<MainSpecial />

	<About />

	<Info />

	<FooterNav />
</template>
