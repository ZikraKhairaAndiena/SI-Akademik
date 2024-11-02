<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardMahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nim', 'nama_lengkap', 'tempat_lahir', 'tgl_lahir', 'email', 'prodi_id', 'alamat'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    protected $table = 'mahasiswas';
}
