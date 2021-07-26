<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = ['id','nama_mhs','jumlah_orang','unit_kerja','jangka_waktu','tujuan','negara','surat_uns','catatan_uns','catatan_belmawa','ktln_kemensetnag','catatan_setneg','status'];
    use HasFactory;
}
