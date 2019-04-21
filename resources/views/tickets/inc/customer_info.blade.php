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
                        <label for="name" class=" form-control-label">Passenger Name</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="number" class=" form-control-label">Passenger Number</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="number" name="number" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="bookedDate" class=" form-control-label">Date Of Travel</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="date" id="bookedDate" name="bookedDate" class="form-control">
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
                            <option value="{{$route->id}}">
                                {{$route->fromPlace}} - {{$route->toPlace}} - T 345 AVG -
                                {{date("h : i A", strtotime($route->departure_time))}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="additinalInfo" class=" form-control-label">Additinal Info</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="additinalInfo" id="additinalInfo" rows="4" class="form-control"></textarea>
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
                        <label for="dateIssued" class=" form-control-label">Issued On</label>
                    </div>
                    @php
                    $now = date("d M Y");
                    @endphp
                    <div class="col-12 col-md-9">
                        <input type="text" id="dateIssued" name="dateIssued" placeholder="{{$now}}" disabled="" class="form-control">
                    </div>
                </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-md">
                Submit
            </button>
            <button type="reset" class="btn btn-danger btn-md" disabled>
                Reset
            </button>
        </div>
        </form>
    </div>
</div>
