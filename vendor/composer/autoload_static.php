<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbec782bdd8128d39d3b936bdb8d780ab
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'index\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'index\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/index',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbec782bdd8128d39d3b936bdb8d780ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbec782bdd8128d39d3b936bdb8d780ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbec782bdd8128d39d3b936bdb8d780ab::$classMap;

        }, null, ClassLoader::class);
    }
}
