<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function getFormattedDdnAttribute() {
        
        $ddn = $this->castAttribute("ddn", $this->ddn);

        return $ddn->locale("fr_CA")->isoFormat("LL");
    }
}
