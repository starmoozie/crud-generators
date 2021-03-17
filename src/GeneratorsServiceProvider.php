<?php

namespace Starmoozie\CRUDGenerators;

use Starmoozie\CRUDGenerators\Console\Commands\BuildStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\ChartStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\ChartControllerStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\ConfigStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\CrudStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\CrudControllerStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\CrudModelStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\CrudOperationStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\CrudRequestStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\ModelStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\RequestStarmoozieCommand;
use Starmoozie\CRUDGenerators\Console\Commands\ViewStarmoozieCommand;
use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider
{
    protected $commands = [
        BuildStarmoozieCommand::class,
        ConfigStarmoozieCommand::class,
        CrudModelStarmoozieCommand::class,
        CrudControllerStarmoozieCommand::class,
        ChartControllerStarmoozieCommand::class,
        CrudOperationStarmoozieCommand::class,
        CrudRequestStarmoozieCommand::class,
        CrudStarmoozieCommand::class,
        ChartStarmoozieCommand::class,
        ModelStarmoozieCommand::class,
        RequestStarmoozieCommand::class,
        ViewStarmoozieCommand::class,
    ];

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
