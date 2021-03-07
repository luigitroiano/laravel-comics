<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novels = Novel::latest()->get();
        //$novels = Novel::all();
        //dd($novels);
        return view('admin.novels.index', compact('novels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $novels = Novel::all();
        return view('admin.novels.create', compact('novels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request['slug'] = Str::slug($request->name);
        $validation = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'available' => 'required',
            'on_sale_date' => 'required',
            'volume' => 'required',
            'trim_size' => 'required',
            'page' => 'required',
            'rated' => 'required',
            'cover' => 'nullable | image | max:500',
            'parallax' => 'nullable | image',
            'slug' => 'required',
        ]);

        $cover = Storage::put('cover_imgs', $request->cover);
        $parallax = Storage::put('jumbotron_show', $request->parallax);
        
        
        $validation['cover'] = $cover;
        $validation['parallax'] = $parallax;
        Novel::create($validation);
        
        
        $new_novel = Novel::orderBy('id', 'desc')->first();
        return redirect()->route('admin.novels.index', $new_novel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Novel $novel)
    {
        //$novel = Novel::find($novel);
        //dd($novel);
        return view('admin.novels.show', compact('novel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Novel $novel)
    {
        return view('admin.novels.edit', compact('novel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novel $novel)
    {
        Storage::delete('cover_imgs', $novel->cover );
        $request['slug'] = Str::slug($request->name);
        $validation = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'available' => 'required',
            'on_sale_date' => 'required',
            'volume' => 'required',
            'trim_size' => 'required',
            'page' => 'required',
            'rated' => 'required',
            'cover' => 'nullable | image | max:500',
            'parallax' => 'nullable | image | max:500',
            'slug' => 'required',
        ]);

        $cover = Storage::put('cover_imgs', $request->cover);
        $parallax = Storage::put('jumbotron_show', $request->parallax);

        $validation['cover'] = $cover;
        $validation['parallax'] = $parallax;

        $novel->update($validation);

        
        return redirect()->route('admin.novels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novel $novel)
    {
        $novel->delete();
        return redirect()->route('admin.novels.index');
    }
}
