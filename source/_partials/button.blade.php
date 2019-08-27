<?php
    $title = $title ?? '';
    $class = $class ?? '';
    $href = $href ?? '';
?>

@component('email:components::button', compact('class', 'href', 'title'))
    {!! $title !!}
@endcomponent