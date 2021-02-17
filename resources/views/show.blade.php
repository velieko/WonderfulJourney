@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">


            <div class="container">
                <div class="row">
                    <div class="col justify-content-center">
                        <h5>{{$article->title}}</h5> 
                        <br/>
                        <img src="{{ asset('Pictures/'.$article->image) }}" style="width:18rem;;">
                        <br/>
                        {{$article->description}}
                        <br/>
                        <br/>
                        <div class="col-1">
                        <a class="nav-link btn btn-dark" href="{{ url()->previous() }}">← Back</a>
                        </div>
                        
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
