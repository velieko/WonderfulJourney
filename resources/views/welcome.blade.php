@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">


            <div class="container">
                <div class="row row-cols-3 mt">
                @foreach($bacaan as $temp)
                    <div class="col mt-3">
                        <h6>
                        {{ $temp->title }}
                        </h6>
                        {{ \Illuminate\Support\Str::limit($temp->description,50) }}
                        <br/>
                        <a href="{{ url('show/'.$temp->id) }}">Full Story</a>
                        <br/>
                        Category: <a href="{{ url('category/'.$temp->category->id) }}">{{$temp->category->name}}</a>
                    </div>
                @endforeach
                </div>
            </div>

    </div>
</div>
@endsection
