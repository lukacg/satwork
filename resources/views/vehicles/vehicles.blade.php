@extends("../layouts.master")

@section("content")

@section("title")
Vehicles
@endsection


<div class="containter">

    <br>
    <button><a href="/newVehicle">Add new Vehicle</a></button>
    <button><a href="/">Back</a></button>

    <br><br>
    <div class="table-responsive">
        <table id="tabela" class="table blueTable">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Production year</th>
                    <th>License plate</th>
                    <th>Device</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{$vehicle->vehicle_type}}</td>
                    <td>{{$vehicle->model}}</td>
                    <td>{{$vehicle->production_year}}</td>
                    <td>{{$vehicle->license_plate}}</td>
                    <td>{{$vehicle->device->device_type}}</a>

                    <td>
                    <button><a href="editVehicle/{{$vehicle->id}}">Edit</button></a></td>
                    </td>

                    <td><a onclick="return confirm('Are You sure?')" href="deleteVehicle/{{$vehicle->id}}"><button>Delete</button></a></td>
                </tr>
                @endforeach

              
            </tbody>
        </table>
    </div>

    

    @endsection