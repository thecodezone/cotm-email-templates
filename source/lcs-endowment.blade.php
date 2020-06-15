@extends('_layouts/lincoln-endowment')

@section('content')
    @component('email:components::section')
        *|content|*
    @endcomponent
@endsection

@section('legal')
    *|legal|*
@endsection