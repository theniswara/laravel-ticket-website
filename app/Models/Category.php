<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    //
    use SoftDeletes;

    // mass assigment
    protected $fillable = [
        'name', // wild park
        'slug', // wild-park => seo google, url friendly domain.com/category/wild-park
        'icon',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name']= $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
