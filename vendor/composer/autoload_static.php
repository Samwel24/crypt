<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4cc8649f914d7288d1da01a240c00ab
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dreamaker\\Crypt\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dreamaker\\Crypt\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4cc8649f914d7288d1da01a240c00ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4cc8649f914d7288d1da01a240c00ab::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
