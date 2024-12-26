<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;

class ShopController extends Controller
{
    public function index()
  {
    $shops=Shop::with(['genre','area'])->get();
    $keyword = "";

    $areas=Area::all();
    $genres=Genre::all();

    return view('index',compact('shops','areas','genres','keyword'));
  }


    public function search(Request $request)
  {
    $keyword = $request->input('keyword');

    $areas=Area::all();
    $genres=Genre::all();
    $shops=[];
    if($request->genre==null&&$request->area!=null){
      $shops = Shop::where('shop_name', 'LIKE', "%{$request->keyword}%")
            ->where('area_id', $request->area)
            ->get();
    };
    if($request->area==null&&$request->genre!=null){
      $shops = Shop::where('shop_name', 'LIKE', "%{$request->keyword}%")
            ->where('genre_id', $request->genre)
            ->get();
    };
    if($request->area==null&&$request->genre==null){
      $shops = Shop::where('shop_name', 'LIKE', "%{$request->keyword}%")
            ->get();
    };
    

    
    return view('index',compact('shops','areas','genres','keyword'));
  }



    public function detail($shop_id)
  {
    $shop=Shop::with(['genre','area'])->find($shop_id);

    $areas=Area::all();
    $genres=Genre::all();

    return view('detail',compact('areas','genres','shop'));
  }

}
