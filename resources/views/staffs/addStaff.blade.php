@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Add Staff</div>
                    <div class="card-body">
                        <form action="/admin/staffs" method="post" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name" class="control-label mb-1">Staff Name</label>
                                    <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="number" class="control-label mb-1">Staff Phone Number</label>
                                    <input id="number" name="number" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                </div>
                                <div class="col-md-6 form-group has-success">
                                    <label for="email" class="control-label mb-1">Staff Email</label>
                                    <input id="email" name="email" type="text" class="form-control">
                                    <span class="help-block field-validation-valid" data-valmsg-for="email" data-valmsg-replace="true"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="role" class="control-label mb-1">Role</label>
                                    <select id="role" name="role" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                        <option value="non-selected">Select Role</option>
                                        @foreach ($roles as $role)
                                          <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="city" class="control-label mb-1">Staff City</label>
                                    <select id="city" name="city" type="text" class="form-control" aria-required="true" aria-invalid="false">
                                        <option value="non-selected">Select City</option>
                                        <option value="Moshi">Moshi</option>
                                        <option value="Arusha">Arusha</option>
                                        <option value="Dar es salaam">Dar es salaam</option>
                                    </select>
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
