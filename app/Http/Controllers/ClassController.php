<?php

namespace App\Http\Controllers;

use DB;
use App\ClassName;
use Illuminate\Http\Request;
// use App\ClassName;
class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class= DB::table('classes')->get();
        return response()->json($class);
        // return ClassName::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'class_name' => 'required|unique:posts|max:25'
        // ]);


        // $data=array();
        // $data['class_name']= $request->class_name;
        // DB::table('classes')->insert($data);
        // return response('done');
        ClassName::insert([
            'class_name' => $request->class_name,
        ]);

        echo 'Done';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=array();
        $data['class_name']= $request->class_name;
        DB::table('classes')->where('id', $id)->update($data);
        return response('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('classes')->where('id' , $id)->delete();
        return response('deleted');
    }
}
