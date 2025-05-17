<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SmartAgricultureApi;

class SmartAgricultureApiController extends Controller
{
    //

    public function index() {
        return response()->json(SmartAgricultureApi::all(), 200);
    }

    public function store(Request $request) {
        $data = SmartAgricultureApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id) {
        return response()->json(SmartAgricultureApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id) {
        $data = SmartAgricultureApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id) {
        SmartAgricultureApi::destroy($id);
        return response()->json(null, 204);
    }
}