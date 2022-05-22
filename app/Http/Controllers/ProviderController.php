<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function provider() {
        $providers = [
            0 => ['name' => 'provider 1', 'status' => 'N', 'cnpj' => '0'],
            1 => ['name' => 'provider 2', 'status' => 'S', 'cnpj' => null]
        ];

        return view('app.provider.index', compact('providers'));

    }
}
