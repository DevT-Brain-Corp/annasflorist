<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'         => 'required|string|max:255',
            'phone_number' => 'required|phone:id|min:11|max:18',
            'email'        => 'required|string|email|max:255|unique:users',
            'password'     => 'required|string|min:8'
        ]);

        User::create([
            'name'         => $request->name,
            'phone_number' => $request->phone_number,
            'email'        => $request->email,
            'password'     => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->with('success', 'User is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'         => 'required|string|max:255',
            'phone_number' => 'required|phone:id|min:11|max:18',
            'password'     => 'required|string|min:8'
        ]);

        User::whereId($id)->update([
            'name'         => $request->name,
            'phone_number' => $request->phone_number,
            'password'     => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->with('success', 'User is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User is successfully deleted');
    }
}
