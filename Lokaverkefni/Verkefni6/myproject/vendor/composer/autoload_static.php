<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd45c0256a26ce38ad4c0a9493aa7e546
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mini\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd45c0256a26ce38ad4c0a9493aa7e546::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd45c0256a26ce38ad4c0a9493aa7e546::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
