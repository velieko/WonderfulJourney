@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">


            <div class="container">
                <div class="row row-cols-3 mt">
                    @foreach($article as $temp)
                        <div class="col mt-3">
                            <h6>
                            {{ $temp->title }}
                            </h6>
                            {{ \Illuminate\Support\Str::limit($temp->description,50) }}
                            <br/>
                            <a href="{{ url('show/'.$temp->id) }}">Full Story</a>
                        </div>
                    @endforeach
                </div>
            </div>

    </div>
</div>
@endsection
