<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    use HasFactory;

    protected $fillable = ['l_plate', 'customer_ci', 'customer_name', 'vehicle_id', 'authorized_by', 'authorization_type'];

    public function user()
    {
        return $this->belongsTo(User::class, 'authorized_by');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
