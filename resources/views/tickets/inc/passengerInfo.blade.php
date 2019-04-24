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
                        <label for="email" class=" form-control-label">Passenger Email</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="email" name="email" class="form-control">
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
                        <label for="route_id" class=" form-control-label">Route</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="route_id" id="route_id" class="form-control">
                            <option value="0">Please select route</option>
                            @foreach ($routes as $route)
                            <option value="{{$route->id}}">
                                {{$route->fromPlace}} - {{$route->toPlace}} - {{$route->bus->registrationNumber}} -
                                {{date("h : i A", strtotime($route->departure_time))}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="additionalInfo" class=" form-control-label">Additinal Info</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="additionalInfo" id="additionalInfo" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="issuedBy" class=" form-control-label">Issued By</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="issuedBy" readonly name="issuedBy" placeholder="{{Auth::user()->name}}" value="{{Auth::user()->name}}" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="issuedOn" class=" form-control-label">Issued On</label>
                    </div>
                    @php
                    $now = date("d M Y");
                    @endphp
                    <div class="col-12 col-md-9">
                        <input type="text" id="issuedOn" name="issuedOn" placeholder="{{$now}}" readonly class="form-control">
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
