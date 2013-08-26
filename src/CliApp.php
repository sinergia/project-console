<?php

class CliApp extends Symfony\Component\Console\Application
{
    public function __construct()
    {
        $composer = file_get_contents(dirname(__DIR__).'/composer.json');
        $composer = json_decode($composer, true);
        parent::__construct($composer['name'], $composer['version']);
    }

    public static function bootstrap()
    {
        $app = new static;
        $it = new FilesystemIterator(__DIR__.'/commands/');

        foreach ($it as $file) {
            require_once $file;
            $class = basename($file, '.php');
            $app->add(new $class);
        }

        return $app;
    }
}
