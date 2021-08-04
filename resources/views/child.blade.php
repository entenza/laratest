
@extends('layout')
 
@section('arriba')
    @parent
    <p>Esto es un agrego a la seccion de arriba</p>
@endsection

@section('principal')
    <p>aqui se define el contenido principal</p>
    <p>Esta es la famosa __FILE__ {{ __DIR__ }}</p>
@endsection



@push('scripts')
    <script src="{{ asset('/test.js') }}"></script>    
@endpush
