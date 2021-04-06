@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/') }}">Home</a>
                @else
                    <a href="{{ route('add') }}">Add Data</a>

                    @if (Route::has('create'))
                        <a href="{{ route('create') }}">Show list</a>
                    @endif
                @endauth
            </div>
        @endif



            <div class="title m-b-md">
                <a href="/add">Add a Member</a>
            </div><br>
    </div>

@endsection
