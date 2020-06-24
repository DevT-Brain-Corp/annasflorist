<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = Article::all();
        if (empty($data)) {
            return view('admin.Article.index');

        } else {
            return view('admin.Article.index')
                ->with('data', $data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $dat = $request->dat;
        return view('admin.Article.create')
            ->with('dat', $dat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $request->title);
        $data = $request->input('photo');
        $photo = $request->file('photo')->getClientOriginalName();
        $destination = base_path() . '/public/article';
        $request->file('photo')->move($destination, $photo);
        Article::create([
            'jenis' => $request->dat,
            'title' => $request->title,
            'slug_title' => $text,
            'deskripsi' => $request->deskripsi,
            'foto_bg' => $photo,
        ]);


        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = Article::where('id', $id)->first();
        return view('admin.Article.edit')
            ->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Article::findOrFail($id);
        $artikel->delete();
        return redirect()->back();
    }
}
