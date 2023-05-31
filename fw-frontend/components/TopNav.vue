<template>
	<div id="TopNav" class="flex items-center w-full z-30 border-b sm:h-[50px]">
		<div class="flex flex-col items-center justify-between w-full p-2 sm:flex-row">
			<div class="pl-2 w-[80%]">
				<NuxtLink to="/">
					<h1 class="font-bold text-2xl text-[#a9d6e5] text-center sm:text-left">TOP <span class="text-3xl text-amber-300">10</span> COINS</h1>
				</NuxtLink>
			</div>

			<div class="flex items-center w-full max-w-[300px] p-1 bg-[#F1F1F2] rounded-lg">
				<input
					class="w-full pl-3 bg-transparent placeholder-[#838383] text-[15px] focus:outline-none"
					type="text"
					placeholder="Search coin"
					:value="coinStore.searchText"
					@input="coinStore.searchText = $event.target.value"
                />
				<div class="px-3 py-1 flex items-center border-l border-l-gray-300">
					<Icon name="mdi:magnify" color="#A1A2A7" size="22" />
				</div>
			</div>
		</div>
	</div>
</template>

<script setup>
import { useCoinStore } from '~/store/coinStore.ts'

const coinStore = useCoinStore()
</script>
