<?php

namespace App\Http\Resources\CoinGecko;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CoinGeckoCoinResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource['id'],
            'symbol' => $this->resource['symbol'],
            'name' => $this->resource['name'],
            'description' => $this->resource['description']['en'],
            'market' => [
                'current_price' => $this->resource['market_data']['current_price']['usd'],
                'market_cap' => $this->resource['market_data']['market_cap']['usd'],
                'volume' => $this->resource['market_data']['total_volume']['usd'],
            ],
        ];
    }
}
