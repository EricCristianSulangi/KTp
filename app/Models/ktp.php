<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ktp extends Model
{
    use HasFactory;

    protected $table = "ktp";
    protected $fillable = [
        "nik",
        "nama",
        "ttl",
        "jk",
        "alamat",
        "desa",
        "kecamatan",
        "agama",
        "status",
        "pekerjaan",
        "kewarganegaraan",
    ];
}
