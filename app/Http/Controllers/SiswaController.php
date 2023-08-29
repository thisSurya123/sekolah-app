<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Jurusan;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('siswa.list-siswa',[
            'siswa' => Siswa::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create',[
            'jurusan' => Jurusan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validForm = $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required'
        ]);
        
        Siswa::create($validForm);
        return redirect('/siswa/create')->with('success', 'Siswa telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('siswa.show',[
            'siswa' => Siswa::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('siswa.edit', [
            'siswa' => Siswa::find($id),
            'jurusan' => Jurusan::all()
        ]);
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
        $validForm = $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required'
        ]);

        Siswa::where('id', $id)->update($validForm);
        return redirect('/siswa')->with('success', 'Data siswa telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::where('id', $id)->delete();
        return redirect('/siswa')->with('danger', 'Siswa telah dihapus');
    }

}
