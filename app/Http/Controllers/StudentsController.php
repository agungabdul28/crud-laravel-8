<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;


class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index',['students' => $students]);

        // return Student::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        // validasi
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:9',
            'email' => 'required',
            'jurusan' => 'required'

        ]);

        Student::create($request->all());

        return redirect('/students')->with('status','Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //menampilkan detail data
        // return view('students.detail'. compact('student'));
        return view('students.detail',compact('student')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //$request data lama, student data baru diinput
        
        Student::where('id', $student->id)
                        ->update([
                            'nama' => $request->nama,
                            'nim' => $request->nim,
                            'email' => $request->email,
                            'jurusan' => $request->jurusan
                        ]);
        return redirect('/students')->with('status', 'Data DiUbah !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //

        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Berhasil Dihapus !');

    }
}
