@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    @include('inc.header_mobile')
    @include('inc.sidebar')

    <div class="page-container">
        @include('inc.header_desktop')

        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1">Dashboard</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row m-t-25">
                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c1">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                        </div>
                                        <div class="text">
                                            <h2>36</h2>
                                            <span>Total Agents</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c2">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-bus"></i>
                                        </div>
                                        <div class="text">
                                            <h2>18</h2>
                                            <span>Total Busses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c3">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-calendar-note"></i>
                                        </div>
                                        <div class="text">
                                            <h2>486</h2>
                                            <span>Ticket Booked</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="overview-item overview-item--c4">
                                <div class="overview__inner">
                                    <div class="overview-box clearfix">
                                        <div class="icon">
                                            <i class="zmdi zmdi-money"></i>
                                        </div>
                                        <div class="text">
                                            <h2> 947,060</h2>
                                            <span>Total Earnings</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="title-1 m-b-25">Recently Ticket Booked</h2>
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>
                                            <th>Booking ID</th>
                                            <th>Customer</th>
                                            <th>Bus</th>
                                            <th>Route</th>
                                            <th>Booked Date</th>
                                            <th class="text-right">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>James Emanuel</td>
                                            <td>T234 ADF</td>
                                            <td>Bagamoyo</td>
                                            <td>23 Jully 2019</td>
                                            <td class="text-right">Tsh 34,000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection


{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Agents</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="col-md-4">
        <form action="/agents/create" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agents as $agent)
              <tr>
                <td>{{$agent->name}}</td>
                <td>{{$agent->email}}</td>
                <td>{{$agent->number}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
</body>

</html> --}}
