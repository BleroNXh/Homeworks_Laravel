@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Update Member Data
            </div>
{{--            enctype="multipart/form-data"--}}
            <form action="/edit" method="POST" enctype="multipart/form-data" >
                @csrf
                <input type="hidden" name="id" value="{{$pizza['id']}}" ><br>

                <label for="firstName">Your name:</label><br>
                <input type="text" name="firstName" value="{{$pizza['firstName']}}" ><br>

                <label for= "secondName">Your Surname:</label><br>
                <input type="text" name="secondName" value="{{$pizza['secondName']}}" ><br>

                <label for="birthDate">birthDate:</label><br>
                <input type="date" name="birthDate" value="{{$pizza['birthDate']}}"><br><br>

                <label for="expireDate">When it expires:</label><br>
                <input type="date"name="expireDate" value="{{$pizza['expireDate']}}"><br><br>

                <label for="price">What is the price:</label><br>
                <input type="int"name="price" value="{{$pizza['price']}}"><br><br>

                <button type="submit"> Update</button>

@endsection
