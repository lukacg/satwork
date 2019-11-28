@extends("../layouts.master")

@section("content")

@section("title")
Drivers
@endsection

<div class="containter">

    <br>
    <button><a href="/newDriver">Add new Driver</a></button>
    <button><a href="/">Back</a></button>

    <br><br>
    <div class="table-responsive">
        <table id="tabela" class="table blueTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone number</th>
                    <th>Vehicle (license_plate)</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach($drivers as $driver)
                <tr>
                    <td>{{$driver->driver_name}}</td>
                    <td>{{$driver->phone_number}}</td>
                    <td>{{$driver->vehicle->license_plate}}</a>

                    <td><button><a href="editDriver/{{$driver->id}}">Edit</button></a></td>
                    <td><a onclick="return confirm('Are You sure?')" href="deleteDriver/{{$driver->id}}"><button>Delete</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
    @endsection