@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <h1>
                Hello {{ Auth::user()->name }}
            
            </h1>
        </div>
    </div>
</div>
@endsection
