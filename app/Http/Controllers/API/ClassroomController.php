<?php

namespace App\Http\Controllers\API;

use App\Classroom;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Classroom::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classroom = new Classroom;

        $classroom->name = $request->name; 
        $classroom->description = $request->description;

        $classroom->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classroom = new Classroom::find($id);

        return response()->json($classroom);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $classroom = new Classroom::find($id);

        $classroom->name = $request->name; 
        $classroom->description = $request->description;

        $classroom->save();

        return response()->json($classroom);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classroom = new Classroom::find($id);

        $classroom->delete();

        return response(200);
    }
}
