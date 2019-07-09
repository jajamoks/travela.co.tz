@extends('layouts.app')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">All Schedules</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Bus Reg No</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Departure Time</th>
                                    <th>Arrival Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $schedule)
                                <tr>
                                    <td>
                                        @foreach($busses as $bus)
                                        {{$bus->registrationNumber}}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach( $schedule->routes as $route)
                                        {{$route->fromPlace}}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach( $schedule->routes as $route)
                                        {{$route->toPlace}}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach( $schedule->routes as $route)
                                        {{$route->arrival_time}}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach( $schedule->routes as $route)
                                        {{$route->departure_time}}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="/admin/schedules/{{$schedule->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
