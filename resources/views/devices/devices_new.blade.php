@extends("../layouts.master")

@section("content")

@section("title")
Devices
@endsection


<div class="containter">

    <br>
    

    <br><br>
    <div class="table-responsive">
        <table id="tabela" class="table blueTable">
            <thead>
                <tr>
                    <th>Devices</th>
                    <th>X</th>
                    <th>Y</th>
                    <th>Time</th>
                </tr>
            </thead>

            <tbody>
                @foreach($device_news as $devn)
                <tr>
                    <td>{{$devn->device->device_type}}</td>
                    <td>{{$devn->x}}</td>
                    <td>{{$devn->y}}</td>
                    <td>{{$devn->time}}</td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>



    @endsection