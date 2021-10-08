<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Config;

class Etudiant extends Model {
    use HasFactory;

    public $incrementing = false;

    protected $primaryKey = "id";

    protected $casts = [
        "ddn" => "datetime"
    ];

    public function ville() {
        return $this->belongsTo(Ville::class);
    }

    public function user() {
        return $this->belongsTo(User::class, "id");
    }

    /**
     * Get all of the articles for the Etudiant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles(): HasMany {
        return $this->hasMany(Article::class);
    }

    public function getFormattedDdnAttribute() {

        $ddn = $this->castAttribute("ddn", $this->ddn);
        $userLocale = Config::get("app.locale");

        return $ddn->locale($userLocale)->isoFormat("LL");
    }
}
