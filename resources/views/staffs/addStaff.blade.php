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
                                        <option value="Arusha ">Arusha </option>
                                        <option value="Dar es Salaam">Dar es Salaam</option>
                                        <option value="Kilimanjaro ">Kilimanjaro </option>
                                        <option value="Tanga ">Tanga </option>
                                        <option value="Morogoro ">Morogoro </option>
                                        <option value="Pwani ">Pwani </option>
                                        <option value="Dodoma ">Dodoma </option>
                                        <option value="Lindi ">Lindi </option>
                                        <option value="Mtwara ">Mtwara </option>
                                        <option value="Ruvuma ">Ruvuma </option>
                                        <option value="Iringa ">Iringa </option>
                                        <option value="Mbeya ">Mbeya </option>
                                        <option value="Singida ">Singida </option>
                                        <option value="Tabora ">Tabora </option>
                                        <option value="Rukwa ">Rukwa </option>
                                        <option value="Kigoma ">Kigoma </option>
                                        <option value="Shinyanga ">Shinyanga </option>
                                        <option value="Kagera ">Kagera </option>
                                        <option value="Mwanza ">Mwanza </option>
                                        <option value="Mara ">Mara </option>
                                        <option value="Manyara ">Manyara </option>
                                        <option value="Njombe ">Njombe </option>
                                        <option value="Katavi ">Katavi </option>
                                        <option value="Simiyu ">Simiyu </option>
                                        <option value="Geita ">Geita </option>
                                        <option value="Songwe">Songwe</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">Add Staff</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
