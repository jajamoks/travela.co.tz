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
                                    <label for="bus-name" class="control-label mb-1">Bus Name</label>
                                    <select id="bus-name" name="bus_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                        @foreach ($bus as $bus)
                                        <option value="{{$bus->id}}">{{$bus->registration_number}}</option>
                                        @endforeach
                                    </select>
                                    <input>
                                </div>
                                <div class="col-md-6 form-group has-success">
                                    <label for="price" class="control-label mb-1">Price</label>
                                    <input id="price" name="price" type="number" class="form-control">
                                    <span class="help-block field-validation-valid" data-valmsg-for="price" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="from_place" class="control-label mb-1">From Place</label>
                                    <input id="from_place" name="bus_type" type="text" class="form-control">
                                    <span class="help-block" data-valmsg-for="from_place" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="to_place" class="control-label mb-1">To Place</label>
                                    <input id="to_place" name="to_place" type="text" class="form-control cc-exp">
                                    <span class="help-block" data-valmsg-for="to_place" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="departure_time" class="control-label mb-1">Departure Time</label>
                                    <input id="departure_time" name="bus_type" type="date"  data-date-format="DD MMMM YYYY" class="form-control">
                                    <span class="help-block" data-valmsg-for="departure_time" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="arrival_time" class="control-label mb-1">Arrival Time</label>
                                    <input id="arrival_time" name="arrival_time" type="date"  data-date-format="DD MMMM YYYY" class="form-control">
                                    <span class="help-block" data-valmsg-for="arrival_time" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
