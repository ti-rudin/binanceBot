<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8d2b33a4ba1befac6807fac88555506
{
    public static $classMap = array (
        'Binance' => __DIR__ . '/..' . '/baitercel/binance-api-php/BinanceClass.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita8d2b33a4ba1befac6807fac88555506::$classMap;

        }, null, ClassLoader::class);
    }
}