<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>New company</title>
</head>

<body>

    <div class="containter">
        <div class="row">

            <div class="col-3">
            </div>
        
                <div class="col-6">
                    <div class="container">

                        <br><br>
                        <a href="/companies"><button type="button" class="btn btn-secondary btn-lg btn-block">Povratak nazad</button></a>

                        <form id="contact" action="{{route('createcompany')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
           
                        <h3>Create new company</h3>
                        <fieldset>
                            <input placeholder="Name" type="text" name="name" tabindex="1">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Adress" type="text" name="adress" tabindex="2">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Contact person" type="text" name="contact_person" tabindex="3">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Phone number" type="number" name="phone_number"tabindex="4">
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