<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Device name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($devices as $devices )
            <tr>
                <td> {{ $device->id}} </td>
                <td> {{ $device->name}} </td>
            </tr>
        @endforeach
    </tbody>
</table>
