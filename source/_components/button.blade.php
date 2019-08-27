<?php
    $title = $title ?? '';
    $class = $class ?? '';
    $href = $href ?? '';
?>

<a href="{{ $href }}" title="{{ $title }}" class="btn {{ $class }}">
    {{ $slot }}
</a>