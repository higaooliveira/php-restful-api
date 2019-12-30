<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5712e5a2c45af770a5685097c4bee963
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Views\\' => 6,
        ),
        'S' => 
        array (
            'Services\\' => 9,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/views',
        ),
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/services',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Models\\Teste' => __DIR__ . '/../..' . '/app/models/Teste.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5712e5a2c45af770a5685097c4bee963::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5712e5a2c45af770a5685097c4bee963::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5712e5a2c45af770a5685097c4bee963::$classMap;

        }, null, ClassLoader::class);
    }
}
