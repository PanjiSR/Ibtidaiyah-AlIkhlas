<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Kategori',
            'category' => category::get(),
            'content' => 'admin/category/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah category',
            'content' => 'admin/category/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
        ]);

        category::create($data);
        return redirect('/admin/posts/category');
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
        $data = [
            'title' => 'Edit category',
            'category' => category::find($id),
            'content' => 'admin/category/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $category = category::find($id);
        $data = $request->validate([
            'name' => 'required',
        ]);

        $category->update($data);
        return redirect('/admin/posts/category');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = category::find($id);
        $category->delete();
        return redirect('/admin/posts/category');

    }
}
