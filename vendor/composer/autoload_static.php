<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45a044f1cfeb6767f239fa8a0c504ec8
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Odc\\Mvc\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Odc\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45a044f1cfeb6767f239fa8a0c504ec8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45a044f1cfeb6767f239fa8a0c504ec8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45a044f1cfeb6767f239fa8a0c504ec8::$classMap;

        }, null, ClassLoader::class);
    }
}
