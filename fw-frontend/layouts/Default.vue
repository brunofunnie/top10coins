<template>
	<div class="container max-w-lg mx-auto bg-[#01497c] sm:my-4 sm:rounded-lg">
		<TopNav />
		<div class="flex mx-auto w-full py-2 px-2">
			<slot />
		</div>
	</div>
</template>

<script setup>
import TopNav from '~/components/TopNav.vue';

useHead({
	title: "TOP 10 Coins"
})
</script>

<style>
body {
	background: #012a4a;
}
</style>
