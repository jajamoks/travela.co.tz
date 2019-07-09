@extends('layouts.app')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">All Routes</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Board Point</th>
                                    <th>Bus Time</th>
                                    <th>Arrival Point</th>
                                    <th>Arrival Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($route as $route)
                                <tr>
                                    <td>{{$route->fromPlace}}</td>
                                    <td>{{$route->departure_time}}</td>
                                    <td>{{$route->toPlace}}</td>
                                    <td>{{$route->arrival_time}}</td>
                                    <td>
                                        <form action="/admin/routes/{{$route->id}}" method="post">
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
