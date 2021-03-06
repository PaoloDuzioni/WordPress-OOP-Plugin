<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a9e25126fe05962dd4f2970eef407bc
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a9e25126fe05962dd4f2970eef407bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a9e25126fe05962dd4f2970eef407bc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
