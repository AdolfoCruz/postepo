@extends('administrator.index')
@section('title','Price History | PosNix')
@section('content')
<h1>Esta es la pagina de historial de precio</h1>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{  URL::asset ('js/ecommerce/brands.js?v='.rand())  }}"></script>
@endpush
