<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SetSoal extends Model
{
    /** @use HasFactory<\Database\Factories\SetSoalFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function soals()
    {
        return $this->hasMany(Soal::class, 'set_id', 'id');
    }
}
