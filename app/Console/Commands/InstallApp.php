<?php

namespace app\Console\Commands;

use Illuminate\Console\Command;
use Pingpong\Modules\Facades\Module;

class InstallApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para ejecutar la instalacion de LMS-Laravel';

    /**
     * Create a new command instance.
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
        $modules = Module::getOrdered();
        $this->info('Generate Key');
        $this->call('key:generate');
        $this->info('Migrations Basics');
        $this->call('migrate');
        $this->info('Executing Seeders');
        $this->call('db:seed');
        $this->info('Executing Migrations Modules');
        $this->call('module:migrate');
        $this->info('Executing Seeders Modules');
        foreach ($modules as $module) {
            $this->info("Executing Seed for module $module->name");
            $this->call('module:seed', ['module' => $module->name]);
        }

        $this->info('Activate theme: Default');
        \Theme::set('default');
        $this->info('Publish assets themes');
        $this->call('theme:publish');
    }
}
