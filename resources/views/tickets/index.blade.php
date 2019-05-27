@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title-1 m-b-25">Tickets Booked</h2>
                    @if(count($tickets) > 0 )
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Ticket</th>
                                    <th>Passenger</th>
                                    <th>Bus</th>
                                    <th>Route</th>
                                    <th>Traveling Date</th>
                                    <th class="text-right">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->id}}</td>
                                    <td>{{$ticket->passenger->name}}</td>
                                    <td>{{--$ticket->route->bus->registrationNumber--}}</td> 
                                    <td>{{$ticket->route->fromPlace}} - {{$ticket->route->toPlace}}</td>
                                    <td>{{date('d M Y', strtotime($ticket->bookedDate))}}</td>
                                     <td class="text-right">{{number_format($ticket->route->amount)}}</td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <p>No ticket booked yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
