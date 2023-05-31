<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoinGecko\CoinGeckoMarketRequest;
use App\Http\Resources\CoinGecko\CoinGeckoCoinResource;
use App\Http\Resources\CoinGecko\CoinGeckoMarketCollectionResource;
use App\Services\CoinGeckoService;

class CoinGeckoController extends Controller
{
    protected $coinGeckoService;

    public function __construct(CoinGeckoService $coinGeckoService)
    {
        $this->coinGeckoService = $coinGeckoService;
    }

    public function getCoinData($coinId)
    {
        $data = $this->coinGeckoService->getCoinData($coinId);

        return new CoinGeckoCoinResource($data);
    }

    public function getMarketData(CoinGeckoMarketRequest $request)
    {
        $data = $this->coinGeckoService->getMarketData(
            $request->input('vs_currency'),
            $request->input('ids', '')
        );

        return CoinGeckoMarketCollectionResource::collection($data);
    }
}