@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">All Busses</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Bus Name</th>
                                    <th>Bus Registration Number</th>
                                    <th>Bus Type</th>
                                    <th>Maximum Seats</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bus as $bus)
                                <tr>
                                    <td>{{$bus->bus_name}}</td>
                                    <td>{{$bus->bus_registration_number}}</td>
                                    <td>{{$bus->bus_type}}</td>
                                    <td>{{$bus->maximum_seats}}</td>
                                    <td>Action</td>
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
