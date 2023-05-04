@foreach($items as $word => $texts)
    <table>
        <thead>
        <tr>
            <th>{{ $word }}</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($texts as $text)
            <tr>
                <td></td>
                <td>{{ $text->name }}</td>
                <td>{{ $text->quantity }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endforeach

<table>
    <thead>
    <tr>
        <th>Totales</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach($items as $word => $texts)
            @php $count = 0 @endphp
            @foreach($texts as $text)
                @php $count = $count +  $text->quantity @endphp
            @endforeach
            <tr>
                <td>{{ $word }}</td>
                <td>{{ $count }}</td>
            </tr>
        @endforeach
    </tbody>
</table>