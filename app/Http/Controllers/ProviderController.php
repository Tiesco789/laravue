<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function provider() {
        return view('app.provider.index');
    }
}
