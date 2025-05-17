<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionServiceApi;
class SubscriptionServiceApiController extends Controller
{
    //
    public function index() {
        return response()->json(SubscriptionServiceApi::all(), 200);
    }

    public function store(Request $request) {
        $data = SubscriptionServiceApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id) {
        return response()->json(SubscriptionServiceApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id) {
        $data = SubscriptionServiceApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id) {
        SubscriptionServiceApi::destroy($id);
        return response()->json(null, 204);
    }
}