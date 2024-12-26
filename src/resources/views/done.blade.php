@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="thanks__content">
  <h1>ご予約ありがとうございます</h1>
  <button class="return__button-submit" type="submit">戻る</button>
</div>

@endsection
