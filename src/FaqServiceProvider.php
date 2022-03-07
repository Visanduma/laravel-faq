<?php

namespace Visanduma\LaravelFaq;

use Illuminate\Support\ServiceProvider;
use Visanduma\LaravelFaq\Commands\CopyNovaResourceCommand;

class FaqServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPublishAbles();
        $this->commands([
            CopyNovaResourceCommand::class
        ]);
    }

    protected function registerPublishAbles(): void
    {

        if (! class_exists('CreateFaqTables')) {

            $this->publishes([
                __DIR__.'/../database/migrations/create_faq_tables.php' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_faq_tables.php'),
            ], 'migrations');
        }



    }
}
