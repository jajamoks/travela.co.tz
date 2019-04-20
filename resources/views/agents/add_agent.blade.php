@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Add Agent</div>
                    <div class="card-body">
                        <form action="/admin/busses" method="post" novalidate="novalidate">
                          {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name" class="control-label mb-1">Bus Name</label>
                                    <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="col-md-6 form-group has-success">
                                    <label for="registration_number" class="control-label mb-1">Bus Registration Number</label>
                                    <input id="registration_number" name="registration_number" type="text" class="form-control">
                                    <span class="help-block field-validation-valid" data-valmsg-for="registration_number" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="type" class="control-label mb-1">Bus Type</label>
                                    <input id="type" name="type" type="text" class="form-control">
                                    <span class="help-block" data-valmsg-for="type" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="seats" class="control-label mb-1">Seats</label>
                                    <input id="seats" name="seats" type="number" class="form-control cc-exp">
                                    <span class="help-block" data-valmsg-for="seats" data-valmsg-replace="true"></span>
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
