@extends('_layouts.generic')

@section('content')
    @component('email:components::section')
        *|content|*
    @endcomponent
@endsection

@section('legal')
    *|legal|*
@endsection