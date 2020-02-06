@extends('_layouts.cotm')

@section('logo')
    <h1 style="text-align: center; margin-bottom: 10px;">Church on the Move</h1>
@endsection

@section('content')
    @component('email:components::section')
        *|content|*
    @endcomponent
@endsection

@section('legal')
    *|legal|*
@endsection