@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>Sign Up</h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors as $error)
                        <p>{{ $error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('user.signup') }}" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button class="btn btn-primary" type="submit">Sign Up</button>
                {{csrf_field()}}
            </form>
        </div>
    </div>
@endsection