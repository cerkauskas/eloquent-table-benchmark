<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateDevData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:gen';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates all things that LaravelIdeHelper gives us ability to';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('ide-helper:models', ['-W' => true]);
        $this->call('ide-helper:generate');
        $this->call('ide-helper:meta');
    }
}
