@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
  <div class="login-form__heading">
    <h2>Login</h2>
  </div>
  <form class="form" action="/login" method="post">
        @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">Email</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">Password</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">ログイン</button>
    </div>
  </form>
</div>
@endsection