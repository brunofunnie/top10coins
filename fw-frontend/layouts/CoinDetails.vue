<template>
	<div class="container max-w-lg mx-auto bg-[#01497c] sm:mt-4 sm:rounded-lg">
		<div class="flex p-2">
			<NuxtLink to="/">
				<Icon name="mdi:arrow-left-bold" color="#FFFFFF" size="22" />
			</NuxtLink>
		</div>
		<div class="flex mx-auto w-full py-2 px-2">
			<slot />
		</div>
	</div>
</template>

<script setup>
useHead({
	title: "Coin Details"
})
</script>

<style>
body {
	background: #012a4a;
}
</style>
