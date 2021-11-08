<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model

{   
    use SoftDeletes;
    // perbedann antara jamak dan flural = migration jamak(s) model flural student
    // protected $table = ('mahasiswa');untuk mengatasijika kita tidak mempunyai table
    // protected $primaryKey  = 'id'; untuk mengatasi mengganti id primary key
    // untuk mengatasi
    // use HasFactory;
    protected $fillable = ['nama','nim','email','jurusan'];
    // $guarded yang ini boleh mengakses
}
