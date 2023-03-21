<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7035cdb607a4dcdc12867529fbffb76
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tribe\\Vimeo_WP\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tribe\\Vimeo_WP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7035cdb607a4dcdc12867529fbffb76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7035cdb607a4dcdc12867529fbffb76::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
