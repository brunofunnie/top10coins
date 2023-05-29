<template>
	<div class="flex flex-col w-full">
		<div class="flex justify-between text-white">
			<span class="text-2xl font-bold">{{coinDetail.name}} <span class="text-xs">{{coinDetail.symbol}}</span></span>
			<CurrencyText class="" :coinValue="coinDetail.market.current_price" />
		</div>
		<div class="flex flex-col bg-white p-2 rounded-b-md">
			<p class="text-1xl font-bold">Market Cap:</p>
			<CurrencyText class="" :coinValue="coinDetail.market.market_cap" />
			<p class="text-1xl font-bold">Volume:</p>
			<CurrencyText class="" :coinValue="coinDetail.market.volume" />
		</div>
	</div>
</template>

<script setup>
definePageMeta({
  layout: "coin-details",
});

const { coin } = useRoute().params

const getCoin = async () => {
	const { data } = await useCustomFetch(`http://127.0.0.1:8000/api/coins/${coin}`)
	console.log(data.value)
	return data.value
}

const coinDetail = await getCoin()

</script>