<?php

namespace App\Http\Controllers\Ecommerce;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Http\Resources\Brand\BrandResource;
use App\Http\Resources\Brand\BrandCollection;

class BrandController extends Controller
{
    public function index(){
        return view('ecommerce.brand.index');
    }

    public function getBrand() {

        $brands = new BrandCollection( Brand::all() );

        return response()->json([
            'data' => $brands
        ]);

    }



}




