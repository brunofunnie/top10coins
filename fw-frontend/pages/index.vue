<template>
	<div class="flex flex-col w-full">
		<div class="w-full grid grid-cols-1 gap-2">
			<CoinCard :coin="d" v-for="d in coinStore.searchCoin" :key="d.id" />
		</div>
	</div>
</template>

<script setup>
import CoinCard from '~/components/CoinCard.vue'
import { useCoinStore } from '~/store/coinStore.ts'
import { storeToRefs } from 'pinia'

const coinStore = useCoinStore()
const { coinList } = storeToRefs(coinStore)
const { fetchCoins } = coinStore

await fetchCoins()
</script>
