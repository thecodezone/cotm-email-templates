@extends('_layouts.cotm')

@section('body')
    @component('email:components::section')
        *|content|*
    @endcomponent
@endsection
