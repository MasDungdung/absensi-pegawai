<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiPegawai extends Model
{
    use HasFactory;
    protected $table        = 'absensi_pegawai';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'id',
        'user_id',
        'tanggal',
        'jam_masuk',
        'jam_pulang',
        'jam_kerja',
    ];    
    
    public function user()    {
        return $this->belongsTo(User::class);
    }
}
