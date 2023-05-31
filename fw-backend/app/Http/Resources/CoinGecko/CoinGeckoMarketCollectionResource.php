<?php

namespace App\Http\Resources\CoinGecko;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CoinGeckoMarketCollectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this['id'],
            'symbol' => $this['symbol'],
            'name' => $this['name'],
            'image' => $this['image'],
            'current_price' => $this['current_price'],
            'last_updated' => $this['last_updated'],
            'high_24h' => $this['high_24h'],
            'low_24h' => $this['low_24h'],
        ];
    }
}
