<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'umur',
        'agama',
        'pendidikan',
        'alamat',
        'nomer_tlpn',
        'nama_suami',
        'umur_suami',
        'agama_suami',
        'pendidikan_suami',
        'pekerjaan_suami',
        'alamat_suami',
        'nomer_suami',
    ];

    /**
     * subjektifs
     *
     * @return void
     */
    public function subjektifs()
    {
        return $this->hasMany(Subjektif::class);
    }
}
