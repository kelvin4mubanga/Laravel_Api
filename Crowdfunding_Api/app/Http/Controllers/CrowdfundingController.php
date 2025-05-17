<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\funding;


class CrowdfundingController extends Controller
{
    //
    
     public function index() {
        return funding::all();
    }

    public function store(Request $request) {
        return funding::create($request->all());
    }

    public function show(funding $funding) {
        return $funding;
    }

    public function update(Request $request, funding $funding) {
        $funding->update($request->all());
        return $funding;
    }

    public function destroy(funding $funding) {
        $funding->delete();
        return response(null, 204);
    }
}
