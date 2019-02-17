@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard  <span class="pull-right"><a class="btn btn-success btn-xs" href="listings/create">Add Listing?</a></span> </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br> {{ 'User id :  '.$user_id}}
                    <h3>Your Listings</h3>
                    @if(count($listings))
                       <table class="table table-striped">
                           <tr>
                               <th>Name</th>
                               <th>Address</th>
                               <th>Website</th>
                               <th>Email</th>
                               <th>Phone</th>
                               <th>Bio</th>
                           </tr>
                           @foreach($listings as $listing)
                               <tr>
                                   <td>{{$listing->name}}</td>
                                   <td>{{$listing->address}}</td>
                                   <td>{{$listing->website}}</td>
                                   <td>{{$listing->email}}</td>
                                   <td>{{$listing->phone}}</td>
                                   <td>{{$listing->bio}}</td>
                                   <td><a class="pull-right btn btn-info" href="listings/{{$listing->id}}/edit">Edit</a></td>
                                   <td>
                                       {!! Form::open(['method'=>'DELETE','action'=>['ListingsController@destroy',$listing->id]]) !!}
                                       {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}</td>
                               </tr>
                           @endforeach
                       </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
