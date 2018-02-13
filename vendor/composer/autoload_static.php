<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62dda12af51b304f9d4d814b2e48e51a
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit62dda12af51b304f9d4d814b2e48e51a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62dda12af51b304f9d4d814b2e48e51a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
