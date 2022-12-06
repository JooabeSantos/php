<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0013f24b8cd08fade448c9914a11593
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0013f24b8cd08fade448c9914a11593::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0013f24b8cd08fade448c9914a11593::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0013f24b8cd08fade448c9914a11593::$classMap;

        }, null, ClassLoader::class);
    }
}