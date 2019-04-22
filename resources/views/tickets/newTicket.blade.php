@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                @include('tickets.inc.passengerInfo')
                @include('tickets.inc.seatsLayout')
            </div>
        </div>
    </div>
</div>
@endsection
