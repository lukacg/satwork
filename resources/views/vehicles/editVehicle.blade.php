<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Edit vehicle</title>
</head>
<body>

    <div class="containter">
        <div class="row">

            <div class="col-3">
            </div>
        
                <div class="col-6">
                <div class="container">
                    <br><br>
                        <button type="button"><a href="/vehicles">Back</button></a> 

                        <form id="contact" action="{{route('updatevehicle', $vehicle->id)}}" method="POST">
                        {{csrf_field()}}
           
                        <h3>Edit vehicle</h3>
                        Type:<br><input placeholder="Type"  type="text" name ="vehicle_type" value="{{$vehicle->vehicle_type}}" tabindex="1"  autofocus>
                        </fieldset>
                        <fieldset>
                        Model:<br><input placeholder="Model" type="text" name="model" value="{{$vehicle->model}}" tabindex="2" autofocus>
                        </fieldset>
                        <fieldset>
                        Production year:<br><input placeholder="Production year" type="number" min="1980" max="2030" step="1" name="production_year" value="{{$vehicle->production_year}}" tabindex="3" >
                        </fieldset>
                        <fieldset>
                        License plate:<br><input placeholder="License plate" type="text" name="license_plate" value="{{$vehicle->license_plate}}" tabindex="4">
                        </fieldset>
                        
                        <fieldset>
                        <span>Device</span>
                        <select name="deviceId">
                        @foreach($devices as $dev)
                            <option value="{{$dev->id}}" @if ($dev->id == $vehicle->companyId) selected @endif>{{$dev->device_type}}</option>
                        @endforeach
                        </select>
                        </fieldset>
                        <br>
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit" class="btn btn-primary" data-submit="...Sending">Update</button>
                        </fieldset>
                        </form>
                </div>

                    <div class="col-3">
                    </div>
                </div>
        </div>
    </div>
</body>

</html>