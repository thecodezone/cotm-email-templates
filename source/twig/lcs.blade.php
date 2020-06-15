@extends('_layouts.lcs')

@section('content')
    @component('email:components::section')
        @verbatim
            {% block body %}
                {{ body|default("") }}
            {% endblock %}
        @endverbatim
    @endcomponent
@endsection

@section('legal')
    @verbatim
        {% block legal %}
            {% if legal|default %}
                    {{ legal }}
                {% else %}
                    1003 N 129th E Ave, Tulsa, OK 74116<br />
                    Copyright © Lincoln Christian School, All rights reserved.
            {% endif %}
        {% endblock %}
    @endverbatim
@endsection