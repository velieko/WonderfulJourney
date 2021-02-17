@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
            <div class="container">
                <div class="row">
                <div class="col">
                <a href="{{url('/blog/add/'.Auth::user()->id)}}" class="btn btn-primary">Create Blog</a>
                </div>

                    <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($article as $temp)
                            <tr>
                                <th scope="row">{{$temp->id}}</th>
                                    <td><a href="#">{{$temp->title}}</a></td> 
                                    <td><a href="{{ url('blog/delete/'.$temp->id) }}" class="btn btn-primary">Delete</a></td>                  
                            </tr>     
                             @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
    </div>
</div>
@endsection
