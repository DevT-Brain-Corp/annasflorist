<?php

namespace App\Http\Controllers\Admin;

use App\Pot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pots = Pot::orderBy('id', 'ASC')->paginate(10);

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
            'pot_color' => 'required|max:255',
            'pot_stock' => 'required|integer',
        ]);

        if ($request->hasFile('pot_image')) {
            $image = $request->file('pot_image');
            $pot_image = time() . Str::slug($request->pot_name) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $pot_image);
        }

        Pot::create([
            'pot_image' => $pot_image,
            'pot_color' => $request->pot_color,
            'pot_stock' => $request->pot_stock,
        ]);

        return redirect()->route('pot.index')->with('success', 'Pot is successfully saved');
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
        $pot = Pot::findOrFail($id);

        return view('admin.pot.edit', compact('pot'));
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
            'pot_color' => 'required|max:255',
            'pot_stock' => 'required|integer',
        ]);

        Pot::whereId($id)->update([
            'pot_color' => $request->pot_color,
            'pot_stock' => $request->pot_stock,
        ]);

        return redirect()->route('pot.index')->with('success', 'Pot is successfully updated');
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
