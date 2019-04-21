@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">All Passengers</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Number</th>
                                    <th>Seat</th>
                                    <th>Bus No</th>
                                    <th>Booked Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($passengers as $passenger)
                                <tr>
                                    <td>{{$passenger->id}}</td>
                                    <td>{{$passenger->name}}</td>
                                    <td class="text-uppercase">{{$passenger->registration_number}}</td>
                                    <td>{{$passenger->type}}</td>
                                    <td class="text-right">{{$passenger->seats}}</td>
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
