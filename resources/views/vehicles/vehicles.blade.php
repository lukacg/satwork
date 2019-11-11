<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Vehicles</title>
</head>

<body>

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
                        <th>Production date</th>
                        <th>License plate</th>
                        <th>License plate</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($vehicles as $vehicle)
                    <tr>
                        <td>{{$vehicle->type}}</td>
                        <td>{{$vehicle->model}}</td>
                        <td>{{$vehicle->production_date}}</td>
                        <td>{{$vehicle->license_plate}}</td>
                        <td>{{$vehicle->device->type}}</a>

                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Edit</button>
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

</body>

</html>