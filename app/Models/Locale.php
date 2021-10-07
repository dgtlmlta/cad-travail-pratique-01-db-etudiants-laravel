<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    use HasFactory;

    public    $incrementing = false;
    protected $primaryKey   = "abbreviation";
    protected $keyType      = "string";
}
