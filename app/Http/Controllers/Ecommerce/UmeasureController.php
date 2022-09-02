<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;
use App\Http\Resources\Umeasure\UmeasureResource;
use App\Http\Resources\Umeasure\UmeasureCollection;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Umeasure;

class UmeasureController extends Controller
{
    public function index()
    {
        return view('ecommerce.unitmeasure.index');
    }
    
    public function getUmeasure() {
        return Umeasure::get();
        // $unitmeasure = new UmeasureCollection( Umeasure::all() );

        // return response()->json([
        //     'data' => $unitmeasure
        // ]);
    }

    public function delete( $id ) {

        try {
            $umeasure    = Umeasure::find($id);
            $deletedUmeasure     = Umeasure::findOrFail($id)->delete();

            if( $deletedUmeasure ) {
                $title  = 'Eliminado';
                $msj    = 'La categoria ha sido eliminado correctamente';
                $type   = 'success';

            } else {
                $title  = 'Error';
                $msj    = 'Ocurrio un error durante el proceso, contacte al equipo de sistemas o intentelo más tarde';
                $type   = 'error';
            }

            return response()->json([
                'title'     => $title,
                'message'   => $msj,
                'type'      => $type
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'title'     => 'Error',
                'message'   => "Ocurrio un error: " . $th->getMessage(),
                'type'      => 'error'
            ]);
        }
    }
}