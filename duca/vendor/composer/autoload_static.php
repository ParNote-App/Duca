<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29442c59b3ac49b2df3f91dc7d2feb10
{
    public static $prefixLengthsPsr4 = array(
        'M' =>
            array(
                'Mimey\\' => 6,
            ),
    );

    public static $prefixDirsPsr4 = array(
        'Mimey\\' =>
            array(
                0 => __DIR__ . '/..' . '/ralouphie/mimey/src',
            ),
    );

    public static $classMap = array(
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29442c59b3ac49b2df3f91dc7d2feb10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29442c59b3ac49b2df3f91dc7d2feb10::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit29442c59b3ac49b2df3f91dc7d2feb10::$classMap;

        }, null, ClassLoader::class);
    }
}
