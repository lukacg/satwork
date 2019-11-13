<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>New driver</title>
</head>
<body>

    <div class="containter">
        <div class="row">

            <div class="col-3">
            </div>
        
                <div class="col-6">
                    <div class="container">

                        <br><br>
                        <a href="/drivers"><button type="button" class="btn btn-secondary btn-lg btn-block">Povratak nazad</button></a>

                        <form id="contact" action="{{route('createdriver')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
           
                        <h3>Create new driver</h3>
                        <fieldset>Name:
                            <input placeholder="Name" type="text" name="name" tabindex="1">
                        </fieldset>
                        <fieldset>Phone number:
                            <input placeholder="Phone number" type="text" name="phone_number" tabindex="2">
                        </fieldset>
                     
                        <fieldset>Vehicle:
                        <select name="vehicleId">
                        @foreach ($vehicles as $vehicle)
                            <option value="{{$vehicle->id}}">{{$vehicle->license_plate}}</option>
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