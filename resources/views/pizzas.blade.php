@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
               Gym Members List
            </div>

<table border="1">
    <tr>
        <td>ID</td>
        <td>firstName</td>
        <td>secondName</td>
        <td>birthDate</td>
        <td>expireDate</td>
        <td>price</td>
        <td>Operation</td>
        <td>Operation</td>
    </tr>
    @foreach($pizzas as $pizza)
        <tr>
        <td>{{$pizza['id']}}</td>
        <td>{{$pizza['firstName']}}</td>
        <td>{{$pizza['secondName']}}</td>
        <td>{{$pizza['birthDate']}}</td>
        <td>{{$pizza['expireDate']}}</td>
        <td>{{$pizza['price']}}</td>
            <td><a href={{"delete/".$pizza['id']}}>Delete</a></td>
            <td><a href={{"edit/".$pizza['id']}}>Edit</a></td>
        </tr>
    @endforeach
</table>

{{--<span>--}}
{{--   {{$pizza->links()}}--}}
{{--</span>--}}
{{--<style>--}}
{{--    .w-6{--}}
{{--        display: none--}}
{{--    }--}}
{{--</style>--}}

</div>
</div>
@endsection

