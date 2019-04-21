<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            Passenger Details
        </div>
        <div class="card-body card-block">
            <form action="/admin/tickets" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="passenger_name" class=" form-control-label">Passenger Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="passenger_name" name="passenger_name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="passenger_number" class=" form-control-label">Passenger Number</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="passenger_number" name="passenger_number" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="booked_date" class=" form-control-label">Date Of Travel</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="date" id="booked_date" name="booked_date" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Route</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="0">Please select</option>
                            @foreach ($routes as $route)
                            <option value="{{$route->id}}">{{$route->from_place}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="additinal_info" class=" form-control-label">Additinal Info</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="additinal_info" id="additinal_info" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="issued_by" class=" form-control-label">Issued By</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="issued_by" name="issued_by" placeholder="{{Auth::user()->name}}" disabled="" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="date_issued" class=" form-control-label">Issued On</label>
                    </div>
                    @php
                    $now = date("d M Y");
                    @endphp
                    <div class="col-12 col-md-9">
                        <input type="text" id="date_issued" name="date_issued" placeholder="{{$now}}" disabled="" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
