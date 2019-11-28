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
                        <button type="button" class="btn btn-primary" 

                        data-vehicle.vehicle_type="{{$vehicle->vehicle_type}}" 
                        data-vehicle.model="{{$vehicle->model}}" 
                        data-vehicle.production_year="{{$vehicle->production_year}}" 
                        data-vehicle.license_plate="{{$vehicle->license_plate}}" 
                        data-device_type="{{$vehicle->device->device_type}}" 
                        
                        data-toggle="modal"  data-target="#editModal">Edit</button> <!-- data-"name" = button.data("name")  in script-->
                    </td>

                    <td><a onclick="return confirm('Are You sure?')" href="deleteVehicle/{{$vehicle->id}}"><button>Delete</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title" id="myModalLabel">Vehicle edit</h5>
                </div>
                <form action="{{route('updatevehicle', $vehicle->id)}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                        @include('vehicles.editVehicle')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
        </div>
    </div>

    <script>
        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) 
            var vehicle_type = button.data('vehicle.vehicle_type') 
            var model = button.data('vehicle.model') 
            var production_year = button.data('vehicle.production_year') 
            var license_plate = button.data('vehicle.license_plate') 
            var device_type = button.data('device_type') 


            var modal = $(this)
            modal.find('.modal-body #vehicle_type').val(vehicle_type)        //.modal-body #id from edit
            modal.find('.modal-body #model').val(model)
            modal.find('.modal-body #production_year').val(production_year)
            modal.find('.modal-body #license_plate').val(license_plate)
            modal.find('.modal-body #dev').val(deviceId)

             
        })
    </script>


    @endsection