<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    use HasFactory;

    protected $fillable = ['vehicle_id', 'authorized_by', 'authorization_type'];

    public function vehicle()
    {
        return $this->belongsToMany(Vehicle::class, 'authorizations', 'id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'authorizations', 'id'); // authorized_by
    }
}
