<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>New device</title>
</head>
<body>

    <div class="containter">
        <div class="row">

            <div class="col-3">
            </div>
        
                <div class="col-6">
                    <div class="container">

                        <br><br>
                        <a href="/devices"><button type="button" class="btn btn-secondary btn-lg btn-block">Povratak nazad</button></a>

                        <form id="contact" action="{{route('createdevice')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
           
                        <h3>Create new device</h3>
                        <fieldset>Type:
                            <input placeholder="Type" type="text" name="type" tabindex="1">
                        </fieldset>
                        <fieldset>Purchase date:
                            <input placeholder="Purchase date" type="date" name="purchase_date" tabindex="2">
                        </fieldset>
                        <fieldset>Activation date:
                            <input placeholder="Activation date" type="date" name="activation_date" tabindex="3">
                        </fieldset>
                        <fieldset>Deactivation date:
                            <input placeholder="Deactivation date" type="date" name="deactivation_date"tabindex="4">
                        </fieldset>
                        <fieldset>Company:
                        <select name="companyId">
                        @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
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