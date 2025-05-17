<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyRentalApi;

class PropertyRentalApiController extends Controller
{
    //
    public function index()
    {
        return response()->json(PropertyRentalApi::all(), 200);
    }

    public function store(Request $request)
    {
        $data = PropertyRentalApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return response()->json(PropertyRentalApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $data = PropertyRentalApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        PropertyRentalApi::destroy($id);
        return response()->json(null, 204);
    }
}
