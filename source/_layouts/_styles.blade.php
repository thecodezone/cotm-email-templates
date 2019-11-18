<?php
    $gutterX = $gutterX ?? '30px';
    $gutterY =  $gutterX ?? '24px';
    $spacingX = $spacingX ?? '10px';
    $spacingY =  $spacingY ?? '6px';
    $pacingLg = '25px';
    $light = $light ?? '#fff';
    $dark = $dark ?? '#f5f5f5';
    $darker = $darker ?? '#EEEEEE';
    $black = $black ?? '#000';
    $brand = $brand ?? '#EC0843';
?>

<style type="text/css">
    .image {
        margin-bottom: 18px;
    }

    .image > img {
        width: 100%;
        max-width: 100%;
        height: auto;
        margin-bottom: 0px;
        display: block;
    }

    .image.withBorder {
        border: 1px solid {{ $darker }};
    }

    .image.stretched {
        margin-left: -{{ $gutterX }};
        margin-right: -{{ $gutterX }};
    }

    .image.stretched:first-child {
        margin-top: -{{ $gutterY  }};
    }

    .image.stretched:last-child {
        margin-bottom: -{{ $gutterY  }};
    }

    .panel-content,
    blockquote {
        margin-top: {{ $gutterY }};
        margin-bottom: {{ $gutterY }};
        background-color: {{ $dark }};
        padding: 18px;
        border-bottom: solid 5px {{ $darker }};
    }

    blockquote {
        font-style: italic;
        font-size: 1.3em;
    }

    blockquote footer {
        font-size: .7em;
        font-weight: bold;
        margin-top: 18px;
        font-style: initial;
    }

    table.section:nth-child(odd) {
        background-color: {{ $light }};
    }

    table.section:nth-child(even) {
        background-color: {{ $dark }};
    }

    table.section:nth-child(even) blockquote {
        background-color: {{ $light }};
    }

    .table table,
    table.table {
        width: 100%;
        margin: 25px 0;
    }

    .table table th,
    table.table th {
        background-color: {{ $black }};
        color: {{ $light }};
    }

    .table table tr,
    table.table tr {
        border-bottom: solid 1px {{ $darker }};
    }

    .table table tfoot td,
    table.table tfoot td {
        background-color: {{ $darker }};
        font-style: italic;
        font-weight: bold;
    }

    .table table tr:nth-child(even),
    table.table tr:nth-child(even) {
        background-color: {{ $light }};
    }

    .table table tr:nth-child(odd),
    table.table tr:nth-child(odd) {
        background-color: {{ $dark }};
    }

    .table table th,
    .table table td,
    table.table th,
    table.table td {
        padding: 10px;
    }

    .mcnButton,
    .btn {
        display: inline-block;
        padding: {{ $spacingY }} {{ $spacingX }};
        margin: {{ $spacingY }} {{ $spacingX }};
        color: {{ $brand }} !important;
        background-color: transparent;
        text-transform: uppercase;
        text-decoration: none !important;
        border: solid 3px {{ $brand }};
        text-align: center;
    }

    .header {
        text-align: center;
    }

    .subcopy {
        font-size: .9em;
        border-top: solid 1px {{ $darker }};
        margin-top: {{ $spacingY }};
    }

    .subcopy tr td {
        padding-top: {{ $gutterY }};
        color: {{ $black }};
    }

</style>