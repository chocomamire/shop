<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

    use HasFactory;

    public function Shops()
    {
        return $this->hasMany(Shop::class);
    }

    protected $fillable = [
        'area',
    ];
}
