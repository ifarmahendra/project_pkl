<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCOba;


class tambah extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelCoba::orderby('id', 'DESC')->get();
        return view('tampil', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelCOba::create([
            'nama'=> $request->nama,
            'nim'=>$request->nim,
            'kelas'=>$request->kelas
        ]);
        return redirect()->route('home.index')->with('status', 'berhasil menambahkan');
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
        $update = ModelCOba::where('id', $id)->first();
        if (ModelCOba::where('id', $id)->count() == 0) {
            return "Data Tidak Ada";
        }
        return view('add-data', compact('update'));
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
        ModelCOba::where('id', $id)->update([
            'nama'  => $request->nama,
            'nim'   => $request->nim,
            'kelas' => $request->kelas
        ]);
        return redirect()->route('home.index')->with('status', 'berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelCOba::where('id', $id)->delete();
        return redirect()->route('home.index')->with('status', 'berhasil menghapus data');
    }
}
