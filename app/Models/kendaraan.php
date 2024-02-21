<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;

    public function sewa()
    {

        return $this->hasMany(sewa::class);
    }
}
