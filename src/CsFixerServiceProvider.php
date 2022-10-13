<?php

namespace Bolideai\CsFixer;

use Bolideai\CsFixer\Console\Commands\ApplyFixer;
use Illuminate\Support\ServiceProvider;

class CsFixerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->bootConfig();
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/resources/config/cs-fixer.php', 'cs-fixer');

        $this->commands([
            ApplyFixer::class,
        ]);
    }

    private function bootConfig(): void
    {
        $this->publishes([
            __DIR__.'/resources/config/cs-fixer.php' => "{$this->app->configPath()}/cs-fixer.php",
        ], 'cs-fixer');
    }
}
