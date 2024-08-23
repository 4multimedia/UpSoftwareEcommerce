<?php

namespace Upsoftware\Ecommerce\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Upsoftware\Core\Traits\UseCategory;
use Upsoftware\Core\Traits\UseHash;
use Upsoftware\Ecommerce\Contracts\EcommerceCategory as EcommerceCategoryContract;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Sluggable\HasTranslatableSlug;
use Spatie\Sluggable\SlugOptions;


class EcommerceCategory extends Model implements EcommerceCategoryContract
{
    use HasFactory, HasTranslations, NodeTrait, HasTranslatableSlug, UseHash, UseCategory;

    public $translatable = ['name', 'slug'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
