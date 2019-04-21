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
                        <label for="issued_by" class=" form-control-label">Issued By</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="issued_by" name="issued_by" placeholder="{{Auth::user()->name}}" disabled="" class="form-control">
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
                        <label for="select" class=" form-control-label">Select</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="select" id="select" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="selectLg" class=" form-control-label">Select Large</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="selectSm" class=" form-control-label">Select Small</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="disabledSelect" class=" form-control-label">Disabled Select</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="disabledSelect" id="disabledSelect" disabled="" class="form-control">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="multiple-select" class=" form-control-label">Multiple select</label>
                    </div>
                    <div class="col col-md-9">
                        <select name="multiple-select" id="multiple-select" multiple="" class="form-control">
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                            <option value="6">Option #6</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Radios</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="radio">
                                <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Inline Radios</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">One
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">Two
                            </label>
                            <label for="inline-radio3" class="form-check-label ">
                                <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">Three
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Checkboxes</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="checkbox">
                                <label for="checkbox1" class="form-check-label ">
                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Option 1
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="checkbox2" class="form-check-label ">
                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input"> Option 2
                                </label>
                            </div>
                            <div class="checkbox">
                                <label for="checkbox3" class="form-check-label ">
                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input"> Option 3
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Inline Checkboxes</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-checkbox1" class="form-check-label ">
                                <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                            </label>
                            <label for="inline-checkbox2" class="form-check-label ">
                                <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                            </label>
                            <label for="inline-checkbox3" class="form-check-label ">
                                <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">File input</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-input" name="file-input" class="form-control-file">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control-file">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
