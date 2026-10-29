<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';

    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'divisi',
        'gaji',
        'tanggal_masuk',
        'keterangan',
    ];
}
