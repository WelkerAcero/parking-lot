<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['doctype_id', 'ci', 'name', 'lastname', 'qr_image_url', 'charge_id', 'created_by'];

    public function doc_type()
    {
        return $this->belongsTo(DocType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
