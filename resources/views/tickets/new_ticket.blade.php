@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                @include('tickets.inc.customer_info')
                @include('tickets.inc.seats_layout')
            </div>
        </div>
    </div>
</div>
@endsection
