@php
    $class = $class ?? '';
    $gutterX = $gutterX ?? '0px';
    $gutterY =  $gutterX ?? '24px';
@endphp

<table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="buttons {{ $class }}">
    <tbody>
    <tr>
        <td valign="top" class="mcnTextContent" style="padding-top: {{ $gutterY }}; padding-right: {{ $gutterX }}; padding-bottom: {{ $gutterY }}; padding-left: {{ $gutterX }}; text-align: center">

            {{ $slot }}

        </td>
    </tr>
    </tbody>
</table>