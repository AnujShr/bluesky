@extends('layouts.material.master')
@section('content')
    <style>
        #map {
            height: 500px;
            width: 500px;
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
                        <div class="add_prop">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h3>Property Title</h3>
                                                            <div class="form-group  margin-left">
                                                                {!! Form::label('title','Title', ['class' => 'bmd-label-floating']) !!}
                                                                {!! Form::text('title',null,['class' => 'form-control']) !!}
                                                                <small id="titleHelp" class="form-text text-muted">
                                                                    Max-length:150
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3>Property Address</h3>
                                                            <div class="form-group">
                                                                {!! Form::label('country', 'Country', ['class' => 'bmd-label-floating"']) !!}
                                                                {!! Form::select('country',  array_merge(['' => 'Select a Country'],$countries->toArray() ),null,['class'=>'form-control select-long country']) !!}
                                                            </div>
                                                            <div class="form-group">
                                                                {!! Form::label('city', 'City', ['class' => 'bmd-label-floating"']) !!}
                                                                {!! Form::select('city',  ['' => 'Select a City'],null,['class'=>'form-control select-long city']) !!}
                                                            </div>
                                                            <div class="form-group">
                                                                {!! Form::label('address', 'Address', ['class' => 'bmd-label-floating"']) !!}
                                                                {!! Form::textarea('address', '', ['class'=>'form-control address', 'rows' =>2]) !!}
                                                                {!! Form::hidden('lat', null, ['id'=>'lat']) !!}
                                                                {!! Form::hidden('lng', null, ['id'=>'lng']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div id="map"></div>
                                                            <small id="mapHelp" class="form-text text-muted">
                                                                Please use map to fill address and auto get coordinates.
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <h3>Property Type</h3>
                                                            <div class="form-group margin-left">
                                                                {!! Form::label('transaction', 'Transaction', ['class' => 'bmd-label-floating"']) !!}
                                                                {!! Form::text('transaction',null,['class' => 'form-control']) !!}
                                                            </div>
                                                            <div class="form-group">
                                                                {!! Form::label('external_reference', 'External Reference', ['class' => 'bmd-label-floating"']) !!}
                                                                {!! Form::text('external_reference',null,['class' => 'form-control']) !!}
                                                            </div>
                                                            <div class="form-group">
                                                                {!! Form::label('category', 'Category', ['class' => 'bmd-label-floating"']) !!}
                                                                <select name="category" class="form-control select">
                                                                    <option value="0">sq.m</option>
                                                                    <option value="1">sq.ft</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                {!! Form::label('type', 'Type', ['class' => 'bmd-label-floating"']) !!}
                                                                <select class="form-control select">
                                                                    <option>sq.m</option>
                                                                    <option>sq.ft</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h3>Primary Information</h3>
                                                            <div class="form-group">
                                                                <select class="select"
                                                                        id="exampleFormControlSelect1">
                                                                    <option disabled selected>Currency</option>
                                                                    <option>$USD</option>
                                                                    <option>$USD</option>
                                                                    <option>$USD</option>
                                                                    <option>$USD</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Price</label>
                                                                <input type="number" class="form-control">
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="bmd-label-floating">Internal
                                                                            Area</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <select class="form-control select">
                                                                            <option>sq.m</option>
                                                                            <option>sq.ft</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        {!! Form::label('external_area','External Area',['class' => 'bmd-label-floating']) !!}
                                                                        {!! Form::text('external_area',null,['class' => 'form-control']) !!}
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <select class="form-control select">
                                                                            <option>sq.m</option>
                                                                            <option>sq.ft</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="bmd-label-floating">Floor Count</label>
                                                                {!! Form::text('floor_count',null,['class' => 'form-control']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <h3>Building Details</h3>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            @php
                                                                                $year = date('Y');
                                                                                $year = (int)$year + 5;
                                                                                $floor_types = config('property.floor_types');
                                                                                asort($floor_types);

                                                                            @endphp

                                                                            <select class="select-long">
                                                                                <option disabled selected>Year of
                                                                                    Construction
                                                                                </option>
                                                                                @for($i = 0;$i<58;$i++)
                                                                                    @php $value = $year - $i; @endphp
                                                                                    <option value="{{$value}} AD">{{$value}}</option>
                                                                                @endfor
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <select class="select">
                                                                                <option disabled selected>Condition
                                                                                </option>
                                                                                @foreach(config('property.conditions') as $key => $condition)
                                                                                    <option value="{{$key}}">{{$condition}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="select-long">
                                                                        <option disabled selected>Roof Types</option>
                                                                        @foreach( config('property.roof_types') as $key => $root_type)
                                                                            <option value="{{$key}}">{{$root_type}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="select-long">
                                                                        <option disabled selected>Floor Type</option>
                                                                        @foreach( $floor_types as $key => $floor_type)
                                                                            <option value="{{$key}}">{{$floor_type}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="select">
                                                                        <option disabled selected>Facing Direction
                                                                        </option>
                                                                        @foreach(config('property.facing_direction') as $key =>$direction)
                                                                            <option value="{{$key}}">{{$direction}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h3>Number of Total Rooms</h3>
                                                                <div class="form-group margin-left">
                                                                    <label class="bmd-label-floating">Rooms</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group margin-left">
                                                                    <label class="bmd-label-floating">Bedrooms</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group margin-left">
                                                                    <label class="bmd-label-floating">Bathrooms</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group margin-left">
                                                                    <label class="bmd-label-floating">Kitchen</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group margin-left">
                                                                    <label class="bmd-label-floating">Balcony</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="bmd-label-floating">Terrace</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <select class="form-control select">
                                                                                <option>sq.m</option>
                                                                                <option>sq.ft</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection