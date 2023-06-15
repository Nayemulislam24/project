<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99bd88f4b710807b4b691700c2a824e6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Appp\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Appp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99bd88f4b710807b4b691700c2a824e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99bd88f4b710807b4b691700c2a824e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit99bd88f4b710807b4b691700c2a824e6::$classMap;

        }, null, ClassLoader::class);
    }
}
