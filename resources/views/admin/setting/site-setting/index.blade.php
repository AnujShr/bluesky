@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            {!! Form::open([
            'url' => route('admin.setting.site'),
            'method'=>'POST',
            ]) !!}
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Site Meta Information
                            </h2>
                            <ul class="nav navbar-right">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            {!! Form::label('title','Title') !!}
                            {!! Form::text('title', $content['meta']['title']??'',['class'=>'form-control']) !!}

                            {!! Form::label('keywords','Keywords') !!}
                            {!! Form::text('keywords', $content['meta']['keywords']??'',['class'=>'form-control']) !!}

                            {!! Form::label('description','Description') !!}
                            {!! Form::textarea('description',$content['meta']['description']??'',["class"=>"form-control","rows"=>"5"]) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Contact
                            </h2>
                            <ul class="nav navbar-right">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="x_content">
                                <br>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    {!! Form::text('email',$content['contact']['email']??'',['class'=>'form-control has-feedback-left', 'placeholder'=>"Primary Email"]) !!}
                                    <span class="fa fa-envelope form-control-feedback left"
                                          aria-hidden="true"></span>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    {!! Form::text('email',$content['contact']['phone']??'',['class'=>'form-control has-feedback-left', 'placeholder'=>"Phone"]) !!}
                                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Social Share
                                </h2>
                                <ul class="nav navbar-right">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::submit('SUMBIT',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
@endsection