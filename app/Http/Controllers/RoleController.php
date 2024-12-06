<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Roles=Role::all();
        return view('dashboard.Role.index',['Roles'=>$Roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permission=Permission::all()->pluck(value:'name',key:'id');
        return view('dashboard.Role.create',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Role=Role::create($request->only('name'));
        $Role->permissions()->sync($request->input('permission',[]));
        return redirect()->route('Role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $Role)
    {
        $Role->load('permissions');
        $permission=permission::all()->pluck(value:'name',key:'id');
        return view('dashboard.Role.edit',compact('Role','permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $Role)
    {
        $Role->update($request->only('name'));
        $Role->permissions()->sync($request->input('permission',[]));
        return redirect()->route('Role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Rol=Role::find($id);
        DB::table('Roles')->where('id',$id)->delete();
        return redirect()->route('Role.index');
    }
}
