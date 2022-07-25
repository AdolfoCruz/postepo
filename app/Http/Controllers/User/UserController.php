<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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

class UserController extends Controller
{
    public function index(){

        return view('user.user.index');

    }

    public function getUsers() {

        $users = new UserCollection( User::all() );

        return response()->json([
            'data' => $users
        ]);

    }


}
