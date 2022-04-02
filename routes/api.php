<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Danamon/bot_location/cabang/', [\App\Http\Controllers\WrapperController::class, 'cabang'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('cabang');
Route::get('/Danamon/bot_location', [\App\Http\Controllers\WrapperController::class, 'location'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('location');
Route::get('/Danamon/inforek', function(){
    return[
        'code' => 0,
        'data' => [
            'norek' => '123123123',
            'saldo' => '1.000.000'
        ]
        ];
    }
    )
    ->middleware(\App\Http\Middleware\NpmMiddleware::class) 
    ->name('inforek');
Route::get('/Danamon/autentikasi', function(){
    return[
        'code' => 0,
        'data'=> [
            'verif no hp' => '123123',
            'masukan otp' => 'A31R'
        ]
        ];
    })
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('autentikasi');
Route::get('/Danamon/riwayat', function(){
    return[
        'code' => 0,
        'data' => [
            'riwayat transaksi' => 'transfer uang','beli pulsa','bayar internet',
        ]
        ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('riwayat');
Route::get('/Danamon/tfbanklain', function(){
    return[
        'code' => 0,
        'data' => [
            'pilih bank' => 'bri',
            'masukan no rekening' => '1231231234'
        ]
        ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('tfbanklain');
Route::get('/user/identitas', function(){
    return[
        'code' => 0,
        'data' => [
            'npm' => '187006076',
            'nama' => 'Rafi Dhiya Nurhaq',
            'email' => 'rafidn@gmail.com'
        ]
        ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('identitas');