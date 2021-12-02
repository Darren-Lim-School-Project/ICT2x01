<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfcadd2eee5f32ac339170f63a956925e
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'View\\' => 5,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/mvc/view',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/mvc/model',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/mvc/controller',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfcadd2eee5f32ac339170f63a956925e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfcadd2eee5f32ac339170f63a956925e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfcadd2eee5f32ac339170f63a956925e::$classMap;

        }, null, ClassLoader::class);
    }
}
