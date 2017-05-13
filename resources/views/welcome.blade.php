@extends('layouts.app')
@section('content')

<div class="flex-center position-ref full-height">

    <div class="landing">
        <div class="title m-b-md">
            Trash talk your roomates
        </div>

        <div class="links">
            <a href="{{route('about') }}">About</a>
            <a href="{{route('complains.index') }}">All Complains</a>
        </div>
    </div>
</div>
@stop
