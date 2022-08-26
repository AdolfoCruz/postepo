<?php

namespace App\Http\Controllers\Ecommerce\catalogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeMaterialsController extends Controller
{
    public function index () {
        return view("ecommerce.catalogs.type_materials.index");
    }
}
