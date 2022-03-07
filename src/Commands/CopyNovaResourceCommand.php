<?php


namespace Visanduma\LaravelFaq\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CopyNovaResourceCommand extends Command
{
    protected $signature = "faq:nova";

    public function handle()
    {
        $nova_path = app_path('Nova');
        $local_path = __DIR__."/../../nova/resources/";

        if(File::exists($nova_path)){
            File::copyDirectory($local_path,$nova_path);
            $this->info('Faq installed into Nova Dashboard!');
        }


    }
}
