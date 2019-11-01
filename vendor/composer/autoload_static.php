<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4f3eec545899db10e86e677d05d195d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPLicengine\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPLicengine\\' => 
        array (
            0 => __DIR__ . '/..' . '/phplicengine/bitly/lib/PHPLicengine',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4f3eec545899db10e86e677d05d195d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4f3eec545899db10e86e677d05d195d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
