<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function readAll(){
        $promos = Promo::with('shop')->get();
        return response()->json([
            'data' => $promos
        ],200);
    }

    public function readLimit(){
        $promos = Promo::orderBy('created_at', 'desc')->limit(5)->with('shop')->get();

        if(count($promos) > 0){
            return response()->json([
            'data' => $promos
            ],200);
        }else{
            return response()->json([
            'data' => [],
            'message' => 'Data tidak ditemukan'
            ],404);
        }
    }
}
