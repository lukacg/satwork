    <table id="myTable" class="table table-bordered sortable">
        <thead>
            <tr>
                <th onclick="sortTable(0)">Companies</th>
                <th onclick="sortTable(1)">Devices</th>
                <th onclick="sortTable(2)">Vehicles</th>
                <th onclick="sortTable(3)">Drivers</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($satwork as $row)
            <tr>
                <td>{{ $row -> company_name}}</td>
                <td>{{ $row -> device_type}}</td>
                <td>{{ $row -> license_plate}}</td>
                <td>{{ $row -> driver_name}}</td>
            </tr>
            @endforeach
        </tbody>
        {!! $satwork->links() !!}
    </table>


