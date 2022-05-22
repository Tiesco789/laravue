<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function provider() {
        $providers = [
            0 => [
                'name' => 'provider 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '0', // sao paulo (sp)
                'tel' => '0000-0000'
            ],
            1 => [
                'name' => 'provider 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', // fortaleza (ce)
                'tel' => '0000-0000'
            ],
            2 => [
                'name' => 'provider 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', // juiz de fora (mg)
                'tel' => '0000-0000'
            ],
        ];

        return view('app.provider.index', compact('providers'));

    }
}
