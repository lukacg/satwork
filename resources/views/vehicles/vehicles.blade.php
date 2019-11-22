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
        <table class="table blueTable">
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
                    <td>{{$vehicle->type}}</td>
                    <td>{{$vehicle->model}}</td>
                    <td>{{$vehicle->production_year}}</td>
                    <td>{{$vehicle->license_plate}}</td>
                    <td>{{$vehicle->device->type}}</a>

                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
                    </td>

                    <td><a onclick="return confirm('Are You sure?')" href="deleteVehicle/{{$vehicle->id}}"><button>Delete</button></a></td>
                </tr>
                @endforeach

                <div>
                    {{ $vehicles->links() }}
                </div>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vehicle edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('vehicles.editVehicle')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>

    </div>

    @endsection