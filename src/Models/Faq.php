<?php

namespace Visanduma\LaravelFaq\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;


class Faq extends Model implements Sortable
{
    use SortableTrait;


    protected $table = 'laravel_faqs';
    protected $guarded = [];


    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
        'sort_on_has_many' => true,
    ];

    public function category()
    {
        return $this->belongsTo(FaqCategory::class);
    }



}
