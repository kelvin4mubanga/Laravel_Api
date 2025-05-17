<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipeSharingApi;

class RecipeSharingApiController extends Controller
{
    //
     public function index()
    {
        return response()->json(RecipeSharingApi::all(), 200);
    }

    public function store(Request $request)
    {
        $data = RecipeSharingApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return response()->json(RecipeSharingApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $data = RecipeSharingApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        RecipeSharingApi::destroy($id);
        return response()->json(null, 204);
    }
}
