<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\ConnectTel\Client;

class CompanyController extends Controller
{
    public function index(Client $client)
    {
        $company = null;
        $symbol = '';
        if (request()->has('symbol')) {
            $symbol = request()->get('symbol');
            $company = $client->getCompany($symbol);
        }
        return Inertia::render('Company', compact('company', 'symbol'));
    }
}
