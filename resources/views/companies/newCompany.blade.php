@extends("../layouts.master")

@section("content")

@section("title")
New company
@endsection

    <div class="containter">
        <div class="row">

            <div class="col-3">
            </div>
        
                <div class="col-6">
                    <div class="container">

                        <br><br>
                        <a href="/companies"><button type="button" class="btn btn-secondary btn-lg btn-block">Back</button></a>

                        <form id="contact" action="{{route('createcompany')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
           
                        <h3>Create new company</h3>
                        <fieldset>
                            <input placeholder="Name" type="text" name="company_name" tabindex="1">
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

@endsection