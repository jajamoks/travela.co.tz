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
                                <div class="col-md-6 form-group">
                                    <label for="fromPlace" class="control-label mb-1">From Place</label>
                                    <input id="fromPlace" name="fromPlace" type="text" class="form-control">
                                    <span class="help-block" data-valmsg-for="fromPlace" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="toPlace" class="control-label mb-1">To Place</label>
                                    <input id="toPlace" name="toPlace" type="text" class="form-control cc-exp">
                                    <span class="help-block" data-valmsg-for="toPlace" data-valmsg-replace="true"></span>
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
