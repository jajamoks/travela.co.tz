@extends('layouts.app')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Schedule Trip</div>
                    <div class="card-body">
                        <form action="/admin/schedules" method="post" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="route_id" class="control-label mb-1">Route</label>
                                    <select class="c-select form-control selectpicker boxed" name="route_id"
                                        data-show-subtext="true" data-live-search="true" title="Select a region">
                                        @foreach ($routes as $route)
                                        <option value="{{$route->id}}">
                                            {{$route->fromPlace}} - {{$route->toPlace}} at {{$route->departure_time}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="scheduledDate" class="control-label mb-1">Date</label>
                                    <input name="scheduledDate" type="date" data-date-format="DD MMMM YYYY"
                                        class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="bus_id" class="control-label mb-1">Bus</label>
                                    <select class="c-select form-control selectpicker boxed" name="bus_id"
                                        data-show-subtext="true" data-live-search="true" title="Select a region">
                                        @foreach ($busses as $bus)
                                        <option value="{{$bus->id}}">{{$bus->registrationNumber}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                {{-- <div class="col-md-6 form-group">
                                    <label for="arrival_time" class="control-label mb-1">Arrival Time</label>
                                    <input id="arrival_time" name="arrival_time" type="time" class="form-control">
                                    <span class="help-block" data-valmsg-for="arrival_time"
                                        data-valmsg-replace="true"></span>
                                </div> --}}
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">Schedule Trip</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
