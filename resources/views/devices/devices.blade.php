<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    <title>Devices</title>
</head>
<body>
    
    <div class="containter">

        <br>
        <button><a href="/newDevice">Add new Device</a></button>
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
                    <td><a href="/company_id={{$device->companyId}}">{{$device->company->name}}</a>

                    <td><button><a href="editDevice/{{$device->id}}">Edit</button></a></td>
                    <td><a onclick="return confirm('Are You sure?')" href="deleteDevice/{{$device->id}}"><button>Delete</button></a></td>
                </tr>

                @endforeach
            </tbody>
            </table>
        </div>

</body>
</html>