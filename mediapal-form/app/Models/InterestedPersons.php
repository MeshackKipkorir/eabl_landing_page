<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestedPersons extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phone_number','company','location'];

    protected $hidden = ['created_at','updated_at'];
}
