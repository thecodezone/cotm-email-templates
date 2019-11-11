@extends('_layouts.cotm')

@section('content')
    @component('email:components::section')
        *|content|*
    @endcomponent
@endsection

@section('legal')
    *|legal|*
@endsection