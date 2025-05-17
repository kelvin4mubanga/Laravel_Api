<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class E-learningApiController extends Controller
{
    //
    public function index()
    {
        return response()->json(E-LearningApi::all(), 200);
    }

    public function store(Request $request)
    {
        $data = E-LearningApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return response()->json(E-LearningApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $data = E-LearningApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        E-LearningApi::destroy($id);
        return response()->json(null, 204);
    }
}
