@extends('_layouts.cotm')

@section('body')
    @component('email:components::section')
        *|content|*
    @endcomponent
@endsection

@section('legal')
    *|legal|*
@endsection
