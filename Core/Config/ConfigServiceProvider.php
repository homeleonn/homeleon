<?php

namespace Core\Config;

use Core\Support\ServiceProvider;
use Exception;

class ConfigServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->set(Config::class, function ($app) {
            return new Config($this->loadConfig());
        });
    }

    public function loadConfig()
    {
        $configFile = ROOT . '/.env.php';

        if (!file_exists($configFile)) {
            throw new Exception('Config file does not exists. Please run "php fw" in root directory for build config file');
        }

        return require $configFile;
    }
}
