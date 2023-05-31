<template>
	<div class="flex flex-col w-full">
		<div class="w-full grid grid-cols-1 gap-2">
			<CoinCard :coin="d" v-for="d in searchCoin" :key="d.id" />
		</div>
	</div>
</template>

<script setup>
import { storeToRefs } from 'pinia'
import { toRaw } from 'vue'
import CoinCard from '~/components/CoinCard.vue'
import { useCoinStore } from '~/store/coinStore.ts'

const coinStore = useCoinStore()
const { searchCoin } = storeToRefs(coinStore)

const fetchCoins = async () => {
	const { data } = await useCustomFetch('http://127.0.0.1:8000/api/coins/markets?vs_currency=usd')
	const rawData = toRaw(data.value)
	coinStore.updateCoinList(rawData.data)
}

onMounted(() => {
	fetchCoins()
})
</script>
