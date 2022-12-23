<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'status'
    ];

    public function Menu(){
        return $this->hasMany('App\Models\Menu');
    }

    protected $guarded = [];
}
