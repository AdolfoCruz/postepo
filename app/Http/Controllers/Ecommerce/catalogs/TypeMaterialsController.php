<?php

namespace App\Http\Controllers\Ecommerce\catalogs;

use Illuminate\Http\Request;
use App\Models\UnitMeasurement;
use App\Http\Controllers\Controller;

class TypeMaterialsController extends Controller
{
    public function index () {
        $material = UnitMeasurement::all(); //Mandar a llamar todos los registros  
        return view("ecommerce.catalogs.type_materials.index")->with("material_data",$material); //Pasar a la vista declarada
    }
}
