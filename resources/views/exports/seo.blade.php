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
