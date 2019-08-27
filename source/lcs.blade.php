@extends('_layouts.lcs')

@dd($this)
@section('body')
    @component('email:components::section')
        *|content|*
    @endcomponent
@endsection
