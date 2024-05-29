<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $table = "data_siswas ";
    protected $fillable = ['nama_siswa','kelas','alamat','telepon','kodepos'];
    use HasFactory;
}
