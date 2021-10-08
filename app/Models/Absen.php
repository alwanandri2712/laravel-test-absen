<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absen extends Model
{
    // use SoftDeletes;
    protected $primaryKey = "id_absen";
    protected $table = "absen";
    protected $fillable = ['id_absen', 'fk_id_users', 'nama_user', 'masuk', 'izin', 'keterangan', 'tanggal', 'waktu_absen', 'waktu_keluar'];

    public function user()
    {
        return $this->belongsTo(Users::class, 'fk_id_users', 'id_users');
    }
}
