<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Article extends Model {
    use HasFactory;

    public function localizedContent() {
        return $this->hasOne(ArticleContent::class);
    }

    public function contents() {
        return $this->hasMany(ArticleContent::class);
    }

    public function author() {
        return $this->belongsTo(Etudiant::class, "etudiant_id");
    }
}
