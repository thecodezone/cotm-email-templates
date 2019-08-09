@php
    $headers = $headers ?? [];
    $rows = $rows ?? [];
    $footers = $footers ?? [];
    $columns = count($rows) ? count($rows) : count($headers);
@endphp

@component('email:components::table')
    @if(count($headers))
        @slot('head')
            @foreach ($headers as $content)
                <th>
                    {{ $content }}
                </th>
            @endforeach
        @endslot
    @endif
    @foreach ($rows as $row)
            <tr>
                @foreach ($row as $content)
                    <td>
                        {{ $content }}
                    </td>
                @endforeach
            </tr>
        @endforeach
    @if(count($footers))
        @slot('foot')
            @foreach ($footers as $content)
                <td>
                    {{ $content }}
                </td>
            @endforeach
       @endslot
    @endif
@endcomponent