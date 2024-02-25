@extends('layouts.main')
@section('title')
    login page
@endsection
@section('body')
    <div class="container">
        {{session('logout') ?? NULL}}
        {{session('error') ?? NULL}}
        <form action="{{route('login_process')}}" method="POST">
            @csrf
            <div class="container mb-3">
                @error('email')
                {{$message}}
                @enderror
                <label for="email" class="form-label">Введите почту</label>
                <input type="email" name="email" class="form-control" id="email" value="{{old('email' ?? NULL)}}">
            </div>
            <div class="container mb-3">
                @error('password')
                {{$message}}
                @enderror
                <label for="password" class="form-label">Введите пароль</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="container mb-3">
                <button type="submit" class="btn btn-success">Войти</button>
            </div>
        </form>
    </div>
@endsection
