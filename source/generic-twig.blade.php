@extends('_layouts.generic')

@section('content')
    @component('email:components::section')
        @verbatim
            {% block content %}{% endblock %}
        @endverbatim
    @endcomponent
@endsection

@section('legal')
    @verbatim
        {% block legal %}{% endblock %}
    @endverbatim
@endsection