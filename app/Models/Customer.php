<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['doctype_id', 'ci', 'name', 'lastname', 'email', 'url', 'charge_id', 'created_by'];

    public function setUrlAtrribute($value = 'MAMALO')
    {
        $this->attributes['url'] = $value;
    }

    public function doctype()
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
