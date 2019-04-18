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
                                    <label for="bus-namet" class="control-label mb-1">Bus Name</label>
                                    <input id="bus-name" name="bus_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="col-md-6 form-group has-success">
                                    <label for="bus_registration_number" class="control-label mb-1">Bus Registration Number</label>
                                    <input id="bus_registration_number" name="bus_registration_number" type="text" class="form-control">
                                    <span class="help-block field-validation-valid" data-valmsg-for="bus_registration_number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="bus_type" class="control-label mb-1">Bus Type</label>
                                    <input id="bus_type" name="bus_type" type="text" class="form-control">
                                    <span class="help-block" data-valmsg-for="bus_type" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="maximum_seats" class="control-label mb-1">Maximum Seats</label>
                                    <input id="maximum_seats" name="maximum_seats" type="number" class="form-control cc-exp">
                                    <span class="help-block" data-valmsg-for="maximum_seats" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
