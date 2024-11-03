<?php

namespace App\Http\Controllers\Api;

use App\Models\users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usersApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=users::all();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        //
    }
}
