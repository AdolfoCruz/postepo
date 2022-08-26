<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;

class ProviderController extends Controller
{
    public function index(){
        return view('ecommerce.provider.index');
    }

    /* public function getProvider() {

        $providers = new ProviderCollection( Provider::all() );

        return response()->json([
            'data' => $providers
        ]);

    } */

}