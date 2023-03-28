<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public $fillable = ['l_plate', 'color', 'model', 'brand', 'customer_id', 'vehicle_type_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
    }

    public function authorization()
    {
        return $this->belongsToMany(User::class, 'authorizations', 'vehicle_id');
    }
}
