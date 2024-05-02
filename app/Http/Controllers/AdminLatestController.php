<?php

namespace App\Http\Controllers;

use App\Models\Latest;
use Illuminate\Http\Request;

class AdminLatestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Berita & Kegiatan Terbaru',
            'latest' => Latest::get(),
            'content' => 'admin/latest/index'
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
        //
        // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'gambar' => 'required',

        ]);

        // Upload Gambar
        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $file_name = time().'-'. $gambar->getClientOriginalName();
            $storage = 'uploads/latests/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        }else{
            $data['gambar'] = null;
        }


        Latest::create($data);
        return redirect('/admin/latest');
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
            'title' => 'required',
            'desc' => 'required',
            'gambar' => 'required',
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
            'gammbar' => 'required'
        ]);

         // Upload Gambar
         if($request->hasFile('gambar')){

            if($latest->gambar != null){
                unlink($latest->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time().'-'. $gambar->getClientOriginalName();

            $storage = 'uploads/latests/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        }else{
            $data['gambar'] = $latest->gambar;
        }

        
        $latest->update($data);
        return redirect('/admin/latest');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $latest = Latest::find($id);
        $latest->delete();
        return redirect('/admin/latest');

    }
}
