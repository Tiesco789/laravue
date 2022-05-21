<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function provider() {
        $providers = ['provider 1'];
        return view('app.provider.index', compact('providers'));

    }
}
