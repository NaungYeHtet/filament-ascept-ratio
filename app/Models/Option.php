<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Translatable\HasTranslations;

class Option extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'option_tag');
    }

    public function customName(): Attribute {
        return Attribute::make(
            get: fn () => "Cus-". $this->name,
        );
    }
}
