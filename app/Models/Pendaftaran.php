<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Pendaftaran extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'pendaftaran';

    protected $fillable = [
        'id_pasien', 'status'
    ];

    public function pasien()
    {
        return $this->hasOne(Pasien::class, 'id', 'id_pasien');
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
}
