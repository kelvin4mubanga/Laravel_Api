<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FitnessTrackerApi;

class FitnessTrackerApiController extends Controller
{
    //
    public function index()
    {
        return response()->json(FitnessTrackerApi::all(), 200);
    }

    public function store(Request $request)
    {
        $data = FitnessTrackerApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return response()->json(FitnessTrackerApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $data = FitnessTrackerApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        FitnessTrackerApi::destroy($id);
        return response()->json(null, 204);
    }
}
