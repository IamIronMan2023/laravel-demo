<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email', 'age', 'gender'];


    public function status(): Attribute
    {
        return new Attribute(
            get: fn () => $this->active ? 'true' : 'false'
        );
    }
}
