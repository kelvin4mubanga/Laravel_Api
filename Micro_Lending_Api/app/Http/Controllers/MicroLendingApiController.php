<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MicroLendingApi;

class MicroLendingApiController extends Controller
{
    //
    public function index()
    {
        return response()->json(MicroLendingApi::all(), 200);
    }

    public function store(Request $request)
    {
        $data = MicroLendingApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return response()->json(MicroLendingApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $data = MicroLendingApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        MicroLendingApi::destroy($id);
        return response()->json(null, 204);
    }
}
