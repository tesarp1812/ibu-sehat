<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjektif extends Model
{

    use HasFactory;
    protected $table = "posts";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'posts_id',
        'keluhan',
        'riwayat_penyakit',
        'riwayat_keluarga',
        'riwayat_dulu',
        'menikah_ke',
        'usia_menikah',
        'lama_menikah',
        'HPHT',
        'menarche',
        'lama_haid',
        'siklus_haid',
        'warna',
        'konsisten',
        'flour_albus',
        'riwayat_kb'
    ];

    /**
     * post
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
