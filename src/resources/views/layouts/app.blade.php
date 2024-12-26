<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>shop_all</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="menu__logo" href="/">
          □
        </a>
        <a class="header__logo" href="/">
          Rese
        </a>
        <div class="search__area">
          <form class="search-form" action="/search" method="POST">
            @csrf
            <div class="search-filters">
            <!-- エリア選択 -->
              <select name="area" value="area" class="search-select">
                <option value="">All area</option>
                @foreach($areas as $area)
                  <option value="{{$area->area_id}}">{{$area->area}}</option>
                @endforeach

              </select>
          
            <!-- ジャンル選択 -->
              <select name="genre" value="genre" class="search-select">
                <option value="">All genre</option>
                @foreach($genres as $genre)
                  <option value="{{$genre->genre_id}}">{{$genre->genre}}</option>
                @endforeach

              </select>
            </div>

            <!-- 検索ボックス -->
              <input type="text" name="keyword" value="{{$keyword}}" placeholder="キーワードを検索" class="search-field">
                <button type="submit" class="search-button">Search</button>
          </form>
        </div>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>
