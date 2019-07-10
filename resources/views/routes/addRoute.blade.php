@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Add Route Details</div>
                    <div class="card-body">
                        <form action="/admin/routes" method="post" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="bus-name" class="control-label">Bus Name</label>
                                    <select id="bus-name" name="bus_id" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                        @foreach ($bus as $bus)
                                        <option value="{{$bus->id}}">{{$bus->registrationNumber}}</option>
                                        @endforeach
                                    </select>
                                    <input>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="fromPlace" class="control-label">From Place</label>
                                    <select class="c-select form-control selectpicker boxed" name="fromPlace"
                                        data-show-subtext="true" data-live-search="true" title="Select a region">
                                        <option value="Non Selected">Select City</option>
                                        <option value="Arusha ">Arusha </option>
                                        <option value="Dar es Salaam">Dar es Salaam</option>
                                        <option value="Kilimanjaro ">Kilimanjaro </option>
                                        <option value="Tanga ">Tanga </option>
                                        <option value="Morogoro ">Morogoro </option>
                                        <option value="Pwani ">Pwani </option>
                                        <option value="Dodoma ">Dodoma </option>
                                        <option value="Lindi ">Lindi </option>
                                        <option value="Mtwara ">Mtwara </option>
                                        <option value="Ruvuma ">Ruvuma </option>
                                        <option value="Iringa ">Iringa </option>
                                        <option value="Mbeya ">Mbeya </option>
                                        <option value="Singida ">Singida </option>
                                        <option value="Tabora ">Tabora </option>
                                        <option value="Rukwa ">Rukwa </option>
                                        <option value="Kigoma ">Kigoma </option>
                                        <option value="Shinyanga ">Shinyanga </option>
                                        <option value="Kagera ">Kagera </option>
                                        <option value="Mwanza ">Mwanza </option>
                                        <option value="Mara ">Mara </option>
                                        <option value="Manyara ">Manyara </option>
                                        <option value="Njombe ">Njombe </option>
                                        <option value="Katavi ">Katavi </option>
                                        <option value="Simiyu ">Simiyu </option>
                                        <option value="Geita ">Geita </option>
                                        <option value="Songwe">Songwe</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="toPlace" class="control-label">To Place</label>
                                    <select class="c-select form-control selectpicker boxed" name="toPlace"
                                        data-show-subtext="true" data-live-search="true" title="Select a region">
                                        <option value="Non Selected">Select City</option>
                                        <option value="Arusha ">Arusha </option>
                                        <option value="Dar es Salaam">Dar es Salaam</option>
                                        <option value="Kilimanjaro ">Kilimanjaro </option>
                                        <option value="Tanga ">Tanga </option>
                                        <option value="Morogoro ">Morogoro </option>
                                        <option value="Pwani ">Pwani </option>
                                        <option value="Dodoma ">Dodoma </option>
                                        <option value="Lindi ">Lindi </option>
                                        <option value="Mtwara ">Mtwara </option>
                                        <option value="Ruvuma ">Ruvuma </option>
                                        <option value="Iringa ">Iringa </option>
                                        <option value="Mbeya ">Mbeya </option>
                                        <option value="Singida ">Singida </option>
                                        <option value="Tabora ">Tabora </option>
                                        <option value="Rukwa ">Rukwa </option>
                                        <option value="Kigoma ">Kigoma </option>
                                        <option value="Shinyanga ">Shinyanga </option>
                                        <option value="Kagera ">Kagera </option>
                                        <option value="Mwanza ">Mwanza </option>
                                        <option value="Mara ">Mara </option>
                                        <option value="Manyara ">Manyara </option>
                                        <option value="Njombe ">Njombe </option>
                                        <option value="Katavi ">Katavi </option>
                                        <option value="Simiyu ">Simiyu </option>
                                        <option value="Geita ">Geita </option>
                                        <option value="Songwe">Songwe</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="departure_time" class="control-label mb-1">Departure Time</label>
                                    <input id="departure_time" name="departure_time" type="time" data-date-format="DD MMMM YYYY" class="form-control">
                                    <span class="help-block" data-valmsg-for="departure_time" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="arrival_time" class="control-label mb-1">Arrival Time</label>
                                    <input id="arrival_time" name="arrival_time" type="time" class="form-control">
                                    <span class="help-block" data-valmsg-for="arrival_time" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="amount" class="control-label mb-1">Price</label>
                                    <input id="amount" name="amount" type="number" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">Add Route</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
