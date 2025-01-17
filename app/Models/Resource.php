<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    public function institution(){
        return $this->belongsTo(Institution::class);
    }

    public function resourceType(){
        return $this->belongsTo(ResourceType::class);
    }
}
