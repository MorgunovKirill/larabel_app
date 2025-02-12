<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'clear:log')]
class ClearLog extends Command
{
    protected $description = 'Clears the Laravel log file.';

    public function handle()
    {
        $logPath = storage_path('logs/laravel.log');
        if (File::exists($logPath)) {
            File::put($logPath, '');
            $this->info('Laravel log file has been cleared.');
        } else {
            $this->error('Laravel log file does not exist.');
        }
    }
}
