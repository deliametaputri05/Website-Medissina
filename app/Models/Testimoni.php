<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Testimoni extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'testimoni';

    protected $fillable = [
        'nama', 'pekerjaan', 'email', 'gambar', 'pesan', 'tipe', 'status'
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
        $toArray['gambar'] = $this->gambar;
        return $toArray;
    }

    public function getFotoAttribute()
    {
        return config('app.url') . Storage::url($this->attributes['gambar']);
    }
}
