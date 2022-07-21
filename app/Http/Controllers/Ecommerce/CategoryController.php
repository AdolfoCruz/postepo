<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Category\CategoryCollection;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('ecommerce.category.index');
    }

    public function getCategory() {

        $categories = new CategoryCollection( Category::all() );

        return response()->json([
            'data' => $categories
        ]);

    }
}




