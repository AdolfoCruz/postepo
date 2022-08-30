<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Http\Resources\Provider\ProviderCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Provider;


class ProviderController extends Controller
{
    public function index(){
        return view('ecommerce.provider.index');
    }

     public function getProvider() {

       // $providers = new ProviderCollection( Provider::all() );

        $request = request();
        $providers = Provider::with(['user']);
        return $providers->get();
        // return Provider::get();

    }

    /*
    public function getProvider() {
        return Provider::get();
    }*/


}