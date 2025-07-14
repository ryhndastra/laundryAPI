<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function readAll(){
        $laundries = Laundry::with('user','shop')->get();
        return response()->json([
            'data' => $laundries
        ],200);
    }

    public function whereUserId($id){
        $laundries = Laundry::where('user_id','=', $id)->with('user','shop')->orderBy('created_at', 'desc')->get();

        if(count($laundries) > 0){
            return response()->json([
            'data' => $laundries
            ],200);
        }else{
            return response()->json([
            'data' => [],
            'message' => 'Data tidak ditemukan'
            ],404);
        }
    }

    public function claimLaundry(Request $request){
        $laundry = Laundry::where([
            ['id','=',$request->id],
            ['claim_code','=',$request->claim_code],
        ])->first();

        if(!$laundry){
            return response()->json([
            'data' => [],
            'message' => 'Data tidak ditemukan'
            ],404);
        }

        if($laundry->user_id != 0){
            return response()->json([
            'message' => 'Laundry sudah diambil'
            ],400);
        }

        $laundry->user_id = $request->user_id;
        $updated = $laundry->save();

        if($updated){
            return response()->json([
            'message' => 'Laundry berhasil diambil',
            'data' => $updated
            ],201);
        }else{
            return response()->json([
            'message' => 'Laundry gagal diambil'
            ],400);
        }
    }
}
