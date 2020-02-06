@php
    $content = str_replace('    ', ' ' , $content); //Kill any spaces that might trigger a markdown code block.
    $section = $section ?? !\Illuminate\Support\Str::contains($content, 'section'); //Should the content be wrapped in a section?
@endphp

@if($section)
    @component('email:components::section')
        {!!  Illuminate\Mail\Markdown::parse($content) !!}
    @endcomponent
@else
    {!! Illuminate\Mail\Markdown::parse($content) !!}
@endif