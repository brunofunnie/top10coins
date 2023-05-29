<?php

namespace App\Services;

use GuzzleHttp\Client;

class CoinGeckoService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.coingecko.com/api/v3/',
            'timeout' => 5,
        ]);
    }

    public function getCoinData($coinId)
    {
        $response = $this->client->get("coins/$coinId", [
            'query' => [
                'community_data' => false,
                'developer_data' => false,
                'tickers' => false,
                'localization' => false
            ],
        ]);
        $data = json_decode($response->getBody(), true);

        return $data;
    }

    public function getMarketData($currency, $ids = '')
    {
        $query = [
            'vs_currency' => $currency,
            'per_page' => 10,
            'page' => 1,
        ];

        if (!empty($ids)) {
            $query['ids'] = $ids;
        }

        $response = $this->client->get('coins/markets', [
            'query' => $query,
        ]);
        $data = json_decode($response->getBody(), true);

        return $data;
    }
}