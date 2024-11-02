<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardProdi extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    protected $table = 'prodis';
}
