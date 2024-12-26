@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="shop__grid">
  @foreach ($shops as $shop)
  <div class="shop__picture">
    <div class="shop__img">
      <span><img src="{{$shop->over_view}}" alt="サンプル画像" class="shop__img-responsive"></span>
    </div>
    <div class="shop__content">
      <div class="shop__name">{{$shop->shop_name}}</div>
    </div>
    <div class="shop__tag">
      <p class="area__tag">#{{$shop->area->area}}</p>
      <p class="genre__tag">#{{$shop->genre->genre}}</p>
    </div>
    <form class="detail__favorite__button">
      <a href="/detail/{{$shop->id}}"class="shop__detail__button-submit" type="button">詳しくみる</a>
      <button class="shop__favorite__button-submit" type="button">♡</button>
    </form>
  </div>
  @endforeach
</div>
@endsection
