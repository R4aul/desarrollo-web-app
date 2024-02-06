@extends('layouts.app')
@section('content')
    <form action="{{route('post.login')}}" method="post">
        @csrf
        <label for="">
            Email
            <input type="text" name="email">
        </label>
        <br>
        <label for="">
            Password
            <input type="password" name="password">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection