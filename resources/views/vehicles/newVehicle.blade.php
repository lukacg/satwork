<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>New vehicle</title>
</head>
<body>

    <div class="containter">
        <div class="row">

            <div class="col-3">
            </div>
        
                <div class="col-6">
                    <div class="container">

                        <br><br>
                        <a href="/vehicles"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>

                        <form id="contact" action="{{route('createvehicle')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
           
                        <h3>Create new vehicle</h3>
                        <fieldset>Type:
                            <input placeholder="Type" type="text" name="vehicle_type" tabindex="1">
                        </fieldset>
                        <fieldset>Model:
                            <input placeholder="Model" type="text" name="model" tabindex="2">
                        </fieldset>
                        <fieldset>Production year:
                            <input placeholder="Production year" type="number" min="1980" max="2030" step="1" value="2019" name="production_year" tabindex="3">
                        </fieldset>
                        <fieldset>License plate:
                            <input placeholder="License plate" type="text" name="license_plate" tabindex="4">
                        </fieldset>
                        <fieldset>Device:
                        <select name="deviceId">
                        @foreach ($devices as $device)
                            <option value="{{$device->id}}">{{$device->device_type}}</option>
                        @endforeach
                        </select>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                        </fieldset>

                    </div>

                    <div class="col-3">
                    </div>
                </div>
        </div>
    </div>
</body>
</html>