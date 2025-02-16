<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1adf625cfacfa62a193fd1a5dc4ae807
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
        'M' => 
        array (
            'Mark\\' => 5,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
        'Mark\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1adf625cfacfa62a193fd1a5dc4ae807::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1adf625cfacfa62a193fd1a5dc4ae807::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1adf625cfacfa62a193fd1a5dc4ae807::$classMap;

        }, null, ClassLoader::class);
    }
}
