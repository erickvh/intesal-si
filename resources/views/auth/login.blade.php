@extends('layouts.auth')

@section('content')
<div class="login-head mb-2">
    <h1>INTESAL</h1>
</div>
<div class="login-box">
    <form class="login-form" method="POST" action="{{ route('login') }}">
        @csrf
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Sign In</h3>
        <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                type="text" placeholder="Email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="control-label">Password</label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password"
                name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
        </div>
    </form>
</div>
@endsection