<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34ab069a6712433a9cfe462af03f4a30
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Adyukas\\PhpMvc\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Adyukas\\PhpMvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/../..' . '/test',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34ab069a6712433a9cfe462af03f4a30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34ab069a6712433a9cfe462af03f4a30::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34ab069a6712433a9cfe462af03f4a30::$classMap;

        }, null, ClassLoader::class);
    }
}