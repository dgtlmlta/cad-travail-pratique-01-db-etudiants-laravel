<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

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
        $userLocale = Config::get("app.locale");

        return $ddn->locale($userLocale)->isoFormat("LL");
    }
}
