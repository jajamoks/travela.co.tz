@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">Change Password</div>
                    <div class="card-body">
                        <form action="/changePasswordForm" method="post" novalidate="novalidate">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="number" class="control-label mb-1">New Password</label>
                                    <input id="password" name="password" type="password" class="form-control" aria-required="true" aria-invalid="false" required="">
                                </div>
                                <div class="col-md-12 form-group has-success">
                                    <label for="email" class="control-label mb-1">Comfirm New Password</label>
                                    <input id="comfirmPassword" name="comfirmPassword" type="password" class="form-control" required="">
                                </div>
                                
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
