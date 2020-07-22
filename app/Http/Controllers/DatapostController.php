<?php

namespace App\Http\Controllers;
// use DB;
use App\Datapost;
use Illuminate\Http\Request;

class DatapostController extends Controller
{
    function index(){
        $post_data = Datapost::all();
        return response()->json($post_data);
    }

    function store(Request $request){
        Datapost::create([
            'post_name' => $request->post_name,
       ]);
       echo 'Inserted';
    }



}
