<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name', 'mobile', 'email', 'arrival_date', 'departure_date','guests', 'pets', 'payment_method'];

}
