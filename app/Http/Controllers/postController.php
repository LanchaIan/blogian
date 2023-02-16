<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function Index(){
        try {
            $players = Post::all();
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message'=>$e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    
        return response()->json([
            'data' => $players,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_OK);
    
       }
    
       public function show(Request $request){
        $viewData = $request->input('id');
        try {
            $players = Post::find($viewData);
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message'=>$e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    
        return response()->json([
            'data' => $players,
            'message' => 'Succeed'
        ], JsonResponse::HTTP_OK);
    
       }
    
       public function ayuda(){
        return view('ayuda');
       }
}
