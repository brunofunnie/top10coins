import { defineStore } from 'pinia'

export const useCoinStore = defineStore({
  id: 'coin-store',
  state: () => {
    return {
      searchText: '',
      coinList: []
    }
  },
  actions: {
    updateSearchText(value: string) {
      this.searchText = value
    },
    updateCoinList(value: any) {
      this.coinList = value
    }
  },
  getters: {
    searchCoin: state => state.coinList?.filter(coin => coin.name.toLowerCase().includes(state.searchText.toLowerCase()) || coin.symbol.toLowerCase().includes(state.searchText.toLowerCase()))
  },
})