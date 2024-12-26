@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <section class="section-wrap">
        <div class="shop__content">
            <a class="menu__logo" href="/">←</a>
            <div class="shop__name">{{$shop->shop_name}}</div>
        </div>
        <div class="shop__picture">
            <div class="shop__img">
                <p><img src="{{$shop->over_view}}" alt="サンプル画像" class="shop__img-responsive"></p>
            </div>
        </div>
        <div class="shop__tag">
            <p class="area__tag">#{{$shop->area->area}}</p>
            <p class="genre__tag">#{{$shop->genre->genre}}</p>
        </div>
        <div class="shop_detail">
            <p class="shop_detail">{{$shop->shop_detail}}</p>
        </div>
    </section>
    <section class="section-wrap">
        <div class="reservation">
            <div class="reservation-ttl">予約</div>
            <div id="app">
            <div class="m-auto w-50 m-5 p-5">
                <div id='calendar'></div>
            </div>
        </div>

        <div class="reservation-form">
            <form action="/reservation/create" method="post">
                @csrf
                <label for="date">日付</label>
                <input type="date" name="date">
                <label for="time">時間</label>
                <input type="time" name="time">
                <select name="number" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="hidden" id="id" name="user_id" value="{{$user->id}}">
                <input type="hidden" name="shop__name" value="{{$shop->shop_name}}">
                <button type="submit">送信</button>
            </form>
        </div>
    </section>
@endsection
