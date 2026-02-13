<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'pres_name',
        'college',
        'org_name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
