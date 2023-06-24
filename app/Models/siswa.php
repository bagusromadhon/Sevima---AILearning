<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;


class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'kode_kelas',
    ];
}
