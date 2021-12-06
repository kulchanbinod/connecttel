<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\ConnectTel\Client;

class QuoteController extends Controller
{
    public function index(Client $client)
    {
        $quote = null;
        $symbol = '';
        if (request()->has('symbol')) {
            $symbol = request()->get('symbol');
            $quote = $client->getQuote($symbol);
        }
        return Inertia::render('Quote', compact('quote', 'symbol'));
    }
}
