<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class ApiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return product ::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return product ::create($request>all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return product ::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product =product ::findOrFail($id);
        $product >update($request>only(['name','breed']));
        return $product ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //product ::findOrFail($id)->delete();
    }
}
