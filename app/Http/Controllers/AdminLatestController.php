<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Latest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminLatestController extends Controller
{
    //
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Berita & Kegiatan Terbaru',
            'latest' => Latest::orderBy('created_at', 'desc')->get(),
            'blog' => Blog::get(),
            'content' => 'admin/latest/index'
        ];
        return view('admin.layouts.wrapper', $data,[
            "title" => "Latest"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah latest',
            'content' => 'admin/latest/add'
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
            'foto' => 'required',
        ]);

        // $data ['urutan'] = 0;
        // Upload foto
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $file_name = time().'-'. $foto->getClientOriginalName();

            $storage = 'uploads/latests/';
            $foto->move($storage, $file_name);
            $data['foto'] = $storage . $file_name;
        }else{
            $data['foto'] = null;
        }

        Latest::create($data);
        Alert::success('Berhasil', 'Data Berhasil Ditambah');
        return redirect('/admin/latest');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = [
            'title' => 'Edit latest',
            'latest' => Latest::find($id),
            'content' => 'admin/latest/show'
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
            'title' => 'Edit latest',
            'latest' => Latest::find($id),
            'content' => 'admin/latest/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $latest = Latest::find($id);
        $data = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            // 'foto' => 'required',
        ]);

        // Upload foto
        if($request->hasFile('foto')){

            if($latest->foto != null){
                unlink($latest->foto);
            }

            $foto = $request->file('foto');
            $file_name = time().'-'. $foto->getClientOriginalName();

            $storage = 'uploads/latests/';
            $foto->move($storage, $file_name);
            $data['foto'] = $storage . $file_name;
        }else{
            $data['foto'] = $latest->foto;
        }

        $latest->update($data);
        Alert::success('Berhasil', 'Data Berhasil Diubah');
        return redirect('/admin/latest');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $latest = Latest::find($id);

        if($latest->foto != null){
            unlink($latest->foto);
        }
        
        $latest->delete();
        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect('/admin/latest');

    }
}
