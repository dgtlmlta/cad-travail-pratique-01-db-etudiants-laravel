<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function content($locale) {
        return $this->hasMany(ArticleContent::class)->where("locale_id", $locale);
    }
}
