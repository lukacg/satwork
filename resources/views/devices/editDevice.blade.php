@extends("../layouts.master")

@section("content")

@section("title")
edit company 
@endsection

    <div class="containter">
        <div class="row">

            <div class="col-3">
            </div>
        
                <div class="col-6">
                <div class="container">
                    <br><br>
                        <button type="button"><a href="/devices">Back</button></a>

                        <form id="contact" action="{{route('updatedevice', $device->id)}}" method="POST">
                        {{csrf_field()}}
           
                        <h3>Edit device</h3>
                        Type:<br><input placeholder="Type"  type="text" name ="device_type" value="{{$device->device_type}}" tabindex="1"  autofocus>
                        </fieldset>
                        <fieldset>
                        Purchase date:<br><input placeholder="Purchase date" type="date" name="purchase_date" value="{{$device->purchase_date}}" tabindex="2" >
                        </fieldset>
                        <fieldset>
                        Activation date:<br><input placeholder="Activation date" type="date" name="activation_date" value="{{$device->activation_date}}" tabindex="3" >
                        </fieldset>
                        <fieldset>
                        Deactivation date:<br><input placeholder="Deactivation date" type="date" name="deactivation_date" value="{{$device->deactivation_date}}" tabindex="4">
                        </fieldset>
                        
                        <fieldset>
                        <span>Company</span>
                        <select name="companyId">
                        @foreach($companies as $com)
                            <option value="{{$com->id}}" @if ($com->id == $device->companyId) selected @endif>{{$com->company_name}}</option>
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

    @endsection