<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Project extends Model implements HasMedia, TranslatableContract{

    use Translatable;
    use InteractsWithMedia;
    use HasFactory;

    public $translatedAttributes = ['title','text'];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['published_at','category_id'];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function category(){
        
        return $this->belongsTo(Category::class);
    }
}
