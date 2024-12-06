<table class="table">
    <thead>
        <tr>
            @foreach ($headers as $header)
                <th scope="col"> {{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{{ $cell }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
