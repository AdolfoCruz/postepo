@extends('administrator.index')
@section('title','Orders | PosNix')
@section('content')
<h1>Esta es la pagina de pedidos</h1>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{  URL::asset ('js/ecommerce/brands.js?v='.rand())  }}"></script>
@endpush
