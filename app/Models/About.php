<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

/**
 * Class About
 *
 * @property $id
 * @property $page_id
 * @property $email
 * @property $phone
 * @property $html
 * @property $css
 * @property $php
 * @property $javascript
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class About extends Model implements HasMedia, TranslatableContract
{
  use HasFactory;
  use Translatable;

  use InteractsWithMedia;
    
    static $rules = [
		'page_id' => 'required',
    'name' => 'required',
		'email' => 'required',
		'phone' => 'required',
    ];


    public $translatedAttributes = ['profession', 'about_me'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['page_id','name','email','phone','html','css','php','javascript'];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function medias()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(150);
    }



}
