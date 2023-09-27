<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77ea71cd7f99efb205d3a7cce8375c09
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Libs\\' => 5,
        ),
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/Libs',
        ),
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/Helpers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77ea71cd7f99efb205d3a7cce8375c09::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77ea71cd7f99efb205d3a7cce8375c09::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77ea71cd7f99efb205d3a7cce8375c09::$classMap;

        }, null, ClassLoader::class);
    }
}