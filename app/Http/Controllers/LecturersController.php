<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Lecturer;
class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturers = Lecturer::all();
        // ->where('slug')->firstOrFail();
        // dd($lecturers);
        return view('lecturers.index',compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // Lecturer::create([
        //     'nama' => $request->nama,
        //     'nidn' => $request->nidn,
        //     'email' => $request->email,
        //     'jabatan' => $request->jabatan
        // ]);

        $request->validate([
            'nama'=> 'required',
            'nama'=> 'required'

        ]);

        Lecturer::create($request->all());
        // dd($request);
        return redirect('lecturers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        // //
        // dd($lecturer);


        return view('lecturers.detail', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecturer $lecturer)
    {
        //
        return view('lecturers.detail', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        //

        Lecturer::where('id',$lecturer->id)
          ->update(['nama' => $request->nama,
            'nidn' => $request->nidn,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'prodi' => $request->prodi, 
            'slug' => $request->slug
        ]);

        return redirect('/lecturers')->with('status','Data berhasil di edit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        //
        Lecturer::destroy($lecturer->id);
        return redirect('/lecturers')->with('status','Dihapus');
    }
}
