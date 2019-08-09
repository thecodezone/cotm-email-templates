@php
    $head = $head ?? null;
    $foot = $foot ?? null;
@endphp

<table class="table">
    @if($head)
        <thead>
        <tr>
           {{ $head }}
        </tr>
        </thead>
    @endif
    {{ $slot }}
    @if($foot)
        <tfoot>
            <tr>
                {{ $foot }}
            </tr>
        </tfoot>
    @endif
</table>