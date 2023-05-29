<?php

namespace App\Http\Requests\CoinGecko;

use Illuminate\Foundation\Http\FormRequest;

class CoinGeckoMarketRequest extends FormRequest
{
    public function rules()
    {
        return [
            'vs_currency' => 'required|string',
            'ids' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'vs_currency.required' => 'The vs_currency is required.',
            'vs_currency.string' => 'The vs_currency must be a string.',
        ];
    }
}