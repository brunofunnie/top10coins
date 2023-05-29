<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoinGecko\CoinGeckoMarketRequest;
use App\Http\Resources\CoinGecko\CoinGeckoCoinResource;
use App\Http\Resources\CoinGecko\CoinGeckoMarketResource;
use App\Services\CoinGeckoService;
use Illuminate\Http\Request;

class CoinGeckoController extends Controller
{
    protected $coinGeckoService;

    public function __construct(CoinGeckoService $coinGeckoService)
    {
        $this->coinGeckoService = $coinGeckoService;
    }

    public function getCoinData(Request $request, $coinId)
    {
        $data = $this->coinGeckoService->getCoinData($coinId);

        return response()->json(new CoinGeckoCoinResource($data));
    }

    public function getMarketData(CoinGeckoMarketRequest $request)
    {
        $data = $this->coinGeckoService->getMarketData(
            $request->input('vs_currency', 'usd'),
            $request->input('ids', '')
        );

        return response()->json(CoinGeckoMarketResource::collection($data));
    }
}