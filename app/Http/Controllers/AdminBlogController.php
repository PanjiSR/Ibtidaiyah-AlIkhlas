<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBlogController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Blog',
            'blog' => Blog::orderBy('created_at', 'desc')->get(),
            'content' => 'admin/blog/index'
        ];
        return view('admin.layouts.wrapper', $data, [
            "title" => "Blog"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah blog',
            'content' => 'admin/blog/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'cover' => 'required',
        ]);

        // $data ['urutan'] = 0;
        // Upload cover
        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $file_name = time().'-'. $cover->getClientOriginalName();

            $storage = 'uploads/blogs/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = null;
        }

        Blog::create($data);
        Alert::success('Berhasil', 'Data Berhasil Ditambah');
        return redirect('/admin/posts/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = [
            'title' => 'Detail blog',
            'blog' => Blog::find($id),
            'content' => 'admin/blog/show'
        ];
        return view('admin.layouts.wrapper', $data);
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title' => 'Edit blog',
            'blog' => Blog::find($id),
            'content' => 'admin/blog/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $blog = Blog::find($id);
        $data = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            // 'cover' => 'required',
        ]);

        // Upload cover
        if($request->hasFile('cover')){

            if($blog->cover != null){
                unlink($blog->cover);
            }

            $cover = $request->file('cover');
            $file_name = time().'-'. $cover->getClientOriginalName();

            $storage = 'uploads/blogs/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = $blog->cover;
        }

        $blog->update($data);
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect('/admin/posts/blog');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $blog = Blog::find($id);

        if($blog->cover != null){
            unlink($blog->cover);
        }
        
        $blog->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect('/admin/posts/blog');

    }
}
