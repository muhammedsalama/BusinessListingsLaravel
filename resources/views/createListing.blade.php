@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a class=" btn btn-success btn-xs" href="{{route('dashboard')}}">Go to dashboard</a></span>  </div>

                <div class="panel-body">
                    {!!Form::open(['method'=>'POST','action'=>'ListingsController@store']) !!}
                    {!! Form::label('createListing', 'Create Listing') !!}
                    {!! Form::text('name','',['placeholder'=>'Company Name..','class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::text('email','',['placeholder'=>'Contact Email..','class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::number('phone','',['placeholder'=>'Contact Phone..','class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::text('website','',['placeholder'=>'Contact Website..','class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::text('address','',['placeholder'=>'Business Address..','class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::textarea('bio','',['placeholder'=>'About this Business..','class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::submit('Create',['class'=>'btn btn-primary center-block','style'=>'margin:0 auto']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection