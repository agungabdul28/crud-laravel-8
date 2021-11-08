<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecturer extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama','nidn','email','jabatan','prodi','slug'];

    // protected $guarded = ['slug'];
    
}
