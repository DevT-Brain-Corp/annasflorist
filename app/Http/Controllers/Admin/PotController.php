<?php

namespace App\Http\Controllers\Admin;

use App\Pot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pots = Pot::all();

        return view('admin.pot.index', compact('pots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pot.create');
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
            'pot_image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'pot_name'  => 'required|max:255',
        ]);

        $image = $request->file('pot_image');
        $pot_image = time()."_".$image->getClientOriginalName();
        $image_path = 'storage';
        $image->move($image_path, $pot_image);

        Pot::create([
            'pot_image' => $pot_image,
            'pot_name'  => $request->pot_name
        ]);

        return redirect('/admin/pot')->with('success', 'Pot is successfully saved');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pot = Pot::findOrFail($id);
        $pot->delete();

        return redirect()->back()->with('success', 'Pot is successfully deleted');
    }
}
