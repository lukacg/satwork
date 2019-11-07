<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Edit company</title>
</head>
<body>

    <div class="containter">
        <div class="row">

            <div class="col-3">
            </div>
        
                <div class="col-6">
                <div class="container">
                    <br><br>
                        <button type="button" class="btn btn-secondary btn-lg btn-block"><a href="/companies">Back</button></a>

                        <form id="contact" action="{{route('updatecompany', $company->id)}}" method="POST">
                        {{csrf_field()}}
           
                        <h3>Edit company</h3>
                        Name:<br><input placeholder="Name"  type="text" name ="name" value="{{$company->name}}" tabindex="1"  autofocus>
                        </fieldset>
                        <fieldset>
                        Address:<br><input placeholder="Address" type="text" name ="adress" value="{{$company->adress}}" tabindex="2" >
                        </fieldset>
                        <fieldset>
                        Contact person:<br><input placeholder="Contact person" name ="contact_person" value="{{$company->contact_person}}" tabindex="3" >
                        </fieldset>
                        <fieldset>
                        Phone number:<br><input placeholder="Phone number" type="number" name ="phone_number" value="{{$company->phone_number}}" tabindex="4">
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