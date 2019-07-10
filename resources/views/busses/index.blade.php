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
                                    <th>Id</th>
                                    <th>Bus Name</th>
                                    <th>Registration Number</th>
                                    <th>Type</th>
                                    <th>Seats</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bus as $bus)
                                <tr>
                                    <td>{{$bus->id}}</td>
                                    <td>{{$bus->name}}</td>
                                    <td class="text-uppercase">{{$bus->registrationNumber}}</td>
                                    <td>{{$bus->type}}</td>
                                    <td class="text-right">{{$bus->seats}}</td>
                                    <td>
                                        <form action="/admin/busses/{{$bus->id}}" method="post">
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
