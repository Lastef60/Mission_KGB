<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit455d83ab7c887e28a5761747aae7c9f3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPOnCouch\\Exceptions\\' => 22,
            'PHPOnCouch\\Adapter\\' => 19,
            'PHPOnCouch\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPOnCouch\\Exceptions\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-on-couch/php-on-couch/src/Exceptions',
        ),
        'PHPOnCouch\\Adapter\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-on-couch/php-on-couch/src/Adapter',
        ),
        'PHPOnCouch\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-on-couch/php-on-couch/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit455d83ab7c887e28a5761747aae7c9f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit455d83ab7c887e28a5761747aae7c9f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit455d83ab7c887e28a5761747aae7c9f3::$classMap;

        }, null, ClassLoader::class);
    }
}
