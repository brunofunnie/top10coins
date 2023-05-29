<template>
	<div class="flex justify-between bg-white p-4 rounded shadow">
		<span>
			<img class="w-5 h-5 mr-2 inline" :src="coin.image">
			<span class="text-sm font-bold">{{coin.name}} ({{ coin.symbol }})</span>
		</span>
		<div class="flex">
			<CurrencyText :coinValue="coin.current_price" />
			<NuxtLink :to='`/coin/${coin.id}`'>
				<Icon class="ml-2" name="mdi:magnify-plus-outline" color="#A1A2A7" size="22" />
			</NuxtLink>
		</div>
	</div>
</template>

<script setup>
const { coin } = defineProps(['coin'])
</script>