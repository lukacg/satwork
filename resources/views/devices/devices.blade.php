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
        <table id="tabela" class="table blueTable">
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
                    <td>{{$device->device_type}}</td>
                    <td>{{$device->purchase_date}}</td>
                    <td>{{$device->activation_date}}</td>
                    <td>{{$device->deactivation_date}}</td>
                    <td>{{$device->company->company_name}}</a>

                    <td><button><a href="editDevice/{{$device->id}}">Edit</button></a>
                    </td>
                    <!--   -->

                    <td><a onclick="return confirm('Are You sure?')" href="deleteDevice/{{$device->id}}"><button>Delete</button></a></td>
                </tr>
                @endforeach

                <!--
                <div>
                    {{ $devices->links() }}
                </div> -->

            </tbody>
        </table>
    </div>



    @endsection