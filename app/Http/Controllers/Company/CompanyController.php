<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Category\CategoryCollection;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index(){
        $data        = (object)[];
        // $data->states = State::all();
        $data->company = Company::all();
        // $company = Company::all();
        // $data->user  = Auth::user();
        return view('company.index',compact('data'));
        // return view( 'company.index')->with([
        //     'company' => $company,
        //     'data' => $data
        // ]);
    }
}
