<template>
	<p class="text-1xl">
		US$ {{ formatCurrency() }}
	</p>
</template>

<script setup>
	const { coinValue } = defineProps(['coinValue'])

	const formatCurrency = () => {
		const formatter = new Intl.NumberFormat('en-US', {
        currency: 'USD',
        minimumFractionDigits: 0,
    })

		return formatter.format(coinValue);
	}
</script>
