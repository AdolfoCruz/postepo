@extends('administrator.index')
@section('title','Tipo de material| PosNix')
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-rounded table-striped border gy-7 gs-7">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Creado</th>
                    <th>Actualizar</th>
                </tr>
            </thead> 
            <tbody>
                @foreach($material_data as $material)
                <tr>
                    <td>{{$material->id}}</td>
                    <td>{{$material->name}}</td>
                    <td>{{$material->created_at ?? "Sin fecha"}}</td>    <!-- ??  ""(Para referenciar un texto cuando es null) -->
                    <td>{{$material->updated_at ?? "Sin actualizar"}}</td> 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection