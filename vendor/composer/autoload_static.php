<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e2a861c80b505e036911033facc81e1
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'miniapp\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'miniapp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scr/miniapp',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e2a861c80b505e036911033facc81e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e2a861c80b505e036911033facc81e1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
