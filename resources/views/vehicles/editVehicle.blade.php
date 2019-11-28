<div class="form-group">
    <label for="vehicle_type">Type</label>
    <input type="text" class="form-controll" name="vehicle_type" id="vehicle_type" autofocus>
</div>

<div class="form-group">
    <label for="model">Model</label>
    <input type="text" class="form-controll" name="model" id="model">
</div>

<div class="form-group">
    <label for="production year">Production year</label>
    <input type="number" min="1980" max="2030" step="1" class="form-controll" name="production_year" id="production_year">
</div>

<div class="form-group">
    <label for="license_plate">License plate</label>
    <input type="text" class="form-controll" name="license_plate" id="license_plate">
</div>

<div class="form-group">
    <span>Device</span>
    <select name="deviceId" id=deviceId>
        @foreach($devices as $dev)
        <option value="{{$dev->id}}" @if ($dev->id == $vehicle->companyId) selected @endif>{{$dev->device_type}}</option>
        @endforeach
    </select>
</div>

<!-- <form id="contact" action="{{route('updatevehicle', $vehicle->id)}}" method="POST">
    {{csrf_field()}}

    <h3>Edit vehicle</h3>
    Type:<br><input placeholder="Type" type="text" name="vehicle_type" value="{{$vehicle->vehicle_type}}" tabindex="1" autofocus>
    </fieldset>
    <fieldset>
        Model:<br><input placeholder="Model" type="text" name="model" value="{{$vehicle->model}}" tabindex="2" autofocus>
    </fieldset>
    <fieldset>
        Production year:<br><input placeholder="Production year" type="number" min="1980" max="2030" step="1" name="production_year" value="{{$vehicle->production_year}}" tabindex="3">
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

    -->