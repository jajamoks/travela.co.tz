@extends('layouts.app')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Add Bus Details</div>
                    <div class="card-body">
                        <form action="/admin/busses" method="post" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name" class="control-label mb-1">Bus Name</label>
                                    <input id="name" name="name" type="text" class="form-control" required="">
                                </div>
                                <div class="col-md-6 form-group has-success">
                                    <label for="registrationNumber" class="control-label mb-1">Bus Registration Number</label>
                                    <input id="registrationNumber" name="registrationNumber" type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="type" class="control-label mb-1">Bus Type</label>
                                    <select id="type" name="type" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                        <option value="non-selected">Select Type</option>
                                        <option value="Luxury">Luxury</option>
                                        <option value="Ordinary">Ordinary</option>
                                        <option value="Semi-Luxury">Semi-Luxury</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="seats" class="control-label mb-1">Seats</label>
                                    <input id="seats" name="seats" value="48" type="number" class="form-control cc-exp" readonly required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">Add Bus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
