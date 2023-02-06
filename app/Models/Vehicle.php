<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public $fillable = ['l_plate', 'color', 'model', 'brand', 'customer_id', 'engine_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function engine()
    {
        return $this->belongsTo(TypeEngine::class, 'engine_id');
    }

    public function authorization()
    {
        return $this->hasMany(Authorization::class);
    }
}
