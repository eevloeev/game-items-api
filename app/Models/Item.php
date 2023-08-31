<?php

namespace App\Models;

use App\Services\ProfanityFilterService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\DescriptionFilterService;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'game_name', 'game_website', 'discount_price'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $profanityFilter = new ProfanityFilterService();
            $descriptionFilter = new DescriptionFilterService();

            $item->name = $profanityFilter->filter($item->name);

            $item->description = $profanityFilter->filter($item->description);
            $item->description = $descriptionFilter->removeImages($item->description);
            $item->description = $descriptionFilter->filterLinks($item->description);
        });
    }
}
