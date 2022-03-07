<?php

namespace Visanduma\LaravelFaq\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FaqCategory extends Model
{
    protected $table = 'laravel_faq_categories';
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->slug = Str::slug($model->name);
        });

        self::updating(function($model){
            $model->slug = Str::slug($model->name);
        });
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class,'category_id','id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
