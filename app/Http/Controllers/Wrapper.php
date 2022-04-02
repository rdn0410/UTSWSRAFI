<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wrapper extends Controller
{
    public function cabang()
    {
        $json = Http::get('https://developer.danamon.co.id/documentation-api/Danamon/bot_location/cabang/')->json();
        return response()->json($json);
    }
    public function location()
    {
        $json = Http::get('https://developer.danamon.co.id/documentation-api/Danamon/bot_location')->json();
        return response()->json($json);
    }
    public function identitas()
    {
        $json = Http::get('/user/identitas')->json();
        return response()->json($json);
    }
    public function infonorek()
    {
        $json = Http::get('/Danamon/inforek')->json();
        return response()->json($json);
    }
    public function autentikasi()
    {
        $json = Http::get('/Danamon/autentikasi')->json();
        return response()->json($json);
    }
    public function Riwayat()
    {
        $json = Http::get('/Danamon/riwayat')->json();
        return response()->json($json);
    }
    public function tfbanklain()
    {
        $json = Http::get('/Danamon/tfbanklain')->json();
        return response()->json($json);
    }
}
