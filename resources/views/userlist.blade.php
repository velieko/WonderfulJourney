@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
            <div class="container">
                <div class="row">
                    <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $temp)
                            <tr>
                                <th scope="row">{{$temp->id}}</th>
                                    <td><a href="{{url('blog/'.$temp->id)}}">{{$temp->name}}</a></td> 
                                    <td>{{$temp->email}}</td>
                                    <td><a href="{{ url('userlist/delete/'.$temp->id) }}" class="btn btn-primary">Delete</a></td>                  
                            </tr>     
                             @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
    </div>
</div>
@endsection
