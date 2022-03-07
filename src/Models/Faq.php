<?php

namespace Visanduma\LaravelFaq\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'laravel_faqs';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(FaqCategory::class);
    }



}
