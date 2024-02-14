<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class up extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        return view('about');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $users =user::findorfail($id);

        return view('users.edit',["users"=>$users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $users =user::findorfail($id);
        $users->name =$request->name;
        $users->email =$request->email;
        $users->admin =$request->admin;
        $users->save();
        return redirect()->route('show_user')->with('update','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $users =user::findorfail($id)->delete();

        return redirect()->route('show_user')->with('delete','تم حذف المستخدم بنجاح');
    }
}
