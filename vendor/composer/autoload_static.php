<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80f37c1810f23b9e2e934f496f127294
{
    public static $files = array (
        '1fbac850882ff0771d96a8fecce70fdd' => __DIR__ . '/../..' . '/app/Helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80f37c1810f23b9e2e934f496f127294::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80f37c1810f23b9e2e934f496f127294::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit80f37c1810f23b9e2e934f496f127294::$classMap;

        }, null, ClassLoader::class);
    }
}