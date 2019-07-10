@extends('layouts.app')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">All Passengers</h2>
                    @if (count($passengers) > 0)
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Route</th>
                                    <th>Bus No</th>
                                    <th>Seat No</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($passengers as $passenger)
                                <tr>
                                    <td>{{$passenger->id}}</td>
                                    <td>{{$passenger->name}}</td>
                                    <td>{{$passenger->number}}</td>
                                    <td>Aru - Mby</td>
                                    <td>T 434 BTS</td>
                                    <td>34</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> 
                    @else
                        <p>No Passenger Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
