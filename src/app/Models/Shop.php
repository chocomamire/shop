<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    use HasFactory;

    protected $fillable = [
        'area_id',
        'genre_id',
        'shop_name',
        'over_view',
        'shop_detail',
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
    
}
