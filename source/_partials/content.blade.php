@php
    $section = $section ?? !\Illuminate\Support\Str::contains($content, 'section'); //Should the content be wrapped in a section?
@endphp

@if($section)
    @component('email:components::section')
        {!! Illuminate\Mail\Markdown::parse($content) !!}
    @endcomponent
@else
    {!! Illuminate\Mail\Markdown::parse($content) !!}
@endif