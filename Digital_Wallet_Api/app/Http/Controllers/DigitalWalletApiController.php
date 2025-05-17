<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DigitalWalletApi;

class DigitalWalletApiController extends Controller
{
    //
    public function index() {
        return response()->json(DigitalWalletApi::all(), 200);
    }

    public function store(Request $request) {
        
        $data = DigitalWalletApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id) {
        return response()->json(DigitalWalletApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id) {
        $data = DigitalWalletApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id) {
        DigitalWalletApi::destroy($id);
        return response()->json(null, 204);
    }
}