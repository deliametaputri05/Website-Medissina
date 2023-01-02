<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "pasien";

    protected $fillable = [
        'id_poli', 'id_dokter', 'nik', 'nama',
        'tempatLahir', 'tglLahir', 'usia', 'jk', 'agama',
        'status', 'alamat', 'noHp', 'caraBayar', 'ktp',
        'tglBerobat', 'keluhan', 'ceklis'

    ];

    public function getCreatedAtAttribute($created_at)
    {
        return Carbon::parse($created_at)
            ->getPreciseTimestamp(3);
    }

    public function getUpdatedAtAttribute($updated_at)
    {
        return Carbon::parse($updated_at)
            ->getPreciseTimestamp(3);
    }

    public function toArray()
    {
        $toArray = parent::toArray();
        $toArray['ktp'] = $this->ktp;
        return $toArray;
    }

    public function getFotoAttribute()
    {
        return config('app.url') . Storage::url($this->attributes['ktp']);
    }
}
