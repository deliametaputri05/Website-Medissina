<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Dokter extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "dokter";

    protected $fillable = [
        'nama', 'id_poli', 'gambar', 'jabatan', 'jadwalHari', 'jadwalWaktu'
    ];

    public function poli()
    {
        return $this->hasOne(Poli::class, 'id', 'id_poli');
    }

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
        $toArray['gambar'] = $this->gambar;
        return $toArray;
    }

    public function getFotoAttribute()
    {
        return config('app.url') . Storage::url($this->attributes['gambar']);
    }
}
