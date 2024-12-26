<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//新規登録ページ
//Route::get('/register', [RegisteredUserController::class, 'create']);
//Route::post('/register', [RegisteredUserController::class, 'store]);

//未登録ユーザー,ショップ一覧ページ
Route::get('/', [ShopController::class, 'index']);
Route::post('/search', [ShopController::class, 'search']);

//メニュー2
Route::get('/menu/register', [ShopController::class, 'index']);

//登録済ユーザーページ
Route::middleware('auth')->group(function () {
    //ログイン、ログアウト処理
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
    //予約状況、お気に入り店舗表示
    Route::get('/mypage', [UserController::class, 'index']);
    //予約感謝ページ
    Route::get('/done', [UserController::class, 'index']);
    //会員登録感謝ページ
    Route::get('/thanks/register', [UserController::class, 'index']);
    //メニュー1
    Route::get('/menu/logout', [UserController::class, 'index']);
    //飲食店詳細ページ
    Route::get('/detail/{shop_id}', [ShopController::class, 'detail']);
    //飲食店お気に入り追加、削除
    Route::post('/favorite/shop', [FavoriteController::class, 'update']);
    Route::post('/favorite/shop', [FavoriteController::class, 'delete']);
    //飲食店予約情報追加、削除
    Route::post('/reservation/create', [ReservationController::class, 'create']);
    Route::get('/reservation/create', [ReservationController::class, 'create']);
    Route::post('/reservation/delete', [ReservationController::class, 'delete']);
});