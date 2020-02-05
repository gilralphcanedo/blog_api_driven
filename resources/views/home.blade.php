@extends('layouts.app')

@section('content')

<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    
    <div id="main-app">
        <div class="col-8 mx-auto">
            <posts-component></posts-component>
        </div>
    </div>
    
</div>
@endsection
