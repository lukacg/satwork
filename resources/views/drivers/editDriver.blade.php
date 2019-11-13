<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Edit driver</title>
</head>
<body>

    <div class="containter">
        <div class="row">

            <div class="col-3">
            </div>
        
                <div class="col-6">
                <div class="container">
                    <br><br>
                        <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/drivers">Back</button></a>

                        <form id="contact" action="{{route('updatedriver', $driver->id)}}" method="POST">
                        {{csrf_field()}}
           
                        <h3>Edit company</h3>
                        Name:<br><input placeholder="Name"  type="text" name ="name" value="{{$driver->name}}" tabindex="1"  autofocus>
                        </fieldset>
                        <fieldset>
                        Phone nymber:<br><input placeholder="Phone number" type="text" name ="phone_number" value="{{$driver->adress}}" tabindex="2" >
                        </fieldset>
                       
                        <fieldset>
                        <span>Vehicle</span>
                        <select name="vehicleId">
                        @foreach($vehicle as $veh)
                            <option value="{{$veh->id}}" @if ($veh->id == $driver->vehicleId) selected @endif>{{$veh->license_plate}}</option>
                        @endforeach
                        </select>
                        </fieldset>
                      
                        
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Update</button>
                        </fieldset>
                    
                </div>

                    <div class="col-3">
                    </div>
                </div>
        </div>
    </div>
</body>
</html>