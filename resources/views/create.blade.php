@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Add a New Member
            </div>

<form action="add" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="firstName">Your name:</label><br>
    <input type="text" name="firstName" ><br>

    <label for= "secondName">Your Surname:</label><br>
    <input type="text" name="secondName" ><br>

    <label for="birthDate">birthDate:</label><br>
    <input type="date" name="birthDate"><br><br>

    <label for="expireDate">When it expires:</label><br>
    <input type="date"name="expireDate"><br><br>

    <input type="int"name="price"><br><br>

<input type="file" name="image" class="file-input">
    <input type="submit" value="Submit"><br><br>
<a href='users'>Watch list</a><br><br><br><br><br>
{{--    <a href="/pizzas">Watch the list</a><br><br><br><br><br>--}}

</form>

@endsection
