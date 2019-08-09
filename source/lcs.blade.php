@extends('_layouts.lcs')

@section('body')
    @component('email:components::section')
        *|content|*
    @endcomponent
@endsection
