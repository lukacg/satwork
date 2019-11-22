@extends("../layouts.master")

@section("content")

@section("title")
Devices
@endsection


<div class="containter">

    <br>
    <button><a href="/newDevice">Add new Device</a></button>
    <button><a href="/">Back</a></button>

    <br><br>
    <div class="table-responsive">
        <table class="table blueTable">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Purchase date</th>
                    <th>Activation date</th>
                    <th>Deactivation date</th>
                    <th>Company</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach($devices as $device)
                <tr>
                    <td>{{$device->type}}</td>
                    <td>{{$device->purchase_date}}</td>
                    <td>{{$device->activation_date}}</td>
                    <td>{{$device->deactivation_date}}</td>
                    <td>{{$device->company->name}}</a>

                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
                    </td>



                    <!-- <button><a href="editDevice/{{$device->id}}">Edit</button></a>  -->

                    <td><a onclick="return confirm('Are You sure?')" href="deleteDevice/{{$device->id}}"><button>Delete</button></a></td>
                </tr>
                @endforeach

                <div>
                    {{ $devices->links() }}
                </div>

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Device edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('devices.editDevice')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>

    </div>

    @endsection