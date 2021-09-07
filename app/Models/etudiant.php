<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Etudiant extends Model
{
    use HasFactory;

    protected $casts = [
        "ddn" => "datetime"
    ];

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function getDdnAttribute($dateDeNaissance) {
        
        $ddn = $this->castAttribute("ddn", $dateDeNaissance);

        return $ddn->locale("fr_CA")->isoFormat("LL");
    }
}
