@extends('layouts.material.master')
@section('content')
    <style>
        form {
            font-weight: bold;
        }

        h3 {
            margin-bottom: -10px;
        }

        input {
            margin-left: 10px;
        }


    </style>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Location and Information</h4>
                            <p class="card-category">Please fill out much information as possible</p>
                        </div>

                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Property Title</h3>
                                        <div class="form-group  margin-left">
                                            <label class="bmd-label-floating">Title</label>
                                            <input type="text" class="form-control">
                                            <small id="titleHelp" class="form-text text-muted">Max-length:255</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Property Address</h3>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Country</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Property Type</h3>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Transaction</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">External Reference</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Category</label>
                                            <select class="form-control selectpicker" data-header="Area unit"
                                                    data-style="btn btn-link"
                                                    id="exampleFormControlSelect1">
                                                <option>sq.m</option>
                                                <option>sq.ft</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Type</label>
                                            <select class="form-control selectpicker" data-header="Area unit"
                                                    data-style="btn btn-link"
                                                    id="exampleFormControlSelect1">
                                                <option>sq.m</option>
                                                <option>sq.ft</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Primary Information</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Internal Area</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <select class="form-control selectpicker" data-header="Area unit"
                                                            data-style="btn btn-link"
                                                            id="exampleFormControlSelect1">
                                                        <option>sq.m</option>
                                                        <option>sq.ft</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">External Area</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" data-header="Area unit"
                                                    data-style="btn btn-link"
                                                    id="exampleFormControlSelect1">
                                                <option>sq.m</option>
                                                <option>sq.ft</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Currency</label>
                                            <select class="form-control select"
                                            id="exampleFormControlSelect1">
                                                <option>sq.m</option>
                                                <option>sq.ft</option>
                                                <option>sq.ft</option>
                                                <option>sq.ft</option>
                                                <option>sq.ft</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Country</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Postal Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so
                                                    thirsty, I'm in that two seat Lambo.</label>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection