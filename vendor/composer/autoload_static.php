<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e1b3e232dc51e9c3eaa0007a5ba3f7c
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e1b3e232dc51e9c3eaa0007a5ba3f7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e1b3e232dc51e9c3eaa0007a5ba3f7c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
