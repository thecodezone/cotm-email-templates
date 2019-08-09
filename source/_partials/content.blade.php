@php
    $section = $section ?? !\Illuminate\Support\Str::contains($content, 'section'); //Should the content be wrapped in a section?
@endphp

@if($section)
    @component('email:components::section')
        {!! $content !!}
    @endcomponent
@else
    {!! $content !!}
@endif