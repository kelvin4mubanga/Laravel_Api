<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TaskManagementApi;

class TaskManagementApiController extends Controller
{
    //
    public function index()
    {
        return response()->json(TaskManagementApi::all(), 200);
    }

    public function store(Request $request)
    {
        $data = TaskManagementApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return response()->json(TaskManagementApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $data = TaskManagementApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        TaskManagementApi::destroy($id);
        return response()->json(null, 204);
    }
}
