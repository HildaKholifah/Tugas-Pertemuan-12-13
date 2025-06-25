<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontaks'; // nama tabel di database

    protected $fillable = [       // kolom yang bisa diisi lewat form
        'nama',
        'alamat',
        'no_hp',
        'email',
        'kategori',
    ];
}
