@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a class=" btn btn-success btn-xs" href="{{route('dashboard')}}">Go to dashboard</a></span> </div>

                <div class="panel-body">
                    {!!Form::open(['method'=>'PATCH','action'=>['ListingsController@update',$listing->id]]) !!}
                    {!! Form::label('editListing', 'Edit Listing') !!}
                    {!! Form::text('name',$listing->name,['class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::text('email',$listing->email,['class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::number('phone',$listing->phone,['class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::text('website',$listing->website,['class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::text('address',$listing->address,['class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::textarea('bio',$listing->bio,['class'=>'form-control','style'=>'margin-bottom:5px']) !!}
                    {!! Form::submit('Update',['class'=>'btn btn-primary center-block','style'=>'margin:0 auto']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection