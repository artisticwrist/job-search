<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f9614c4ebefe49d25a7dc2f4f033b01
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f9614c4ebefe49d25a7dc2f4f033b01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f9614c4ebefe49d25a7dc2f4f033b01::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f9614c4ebefe49d25a7dc2f4f033b01::$classMap;

        }, null, ClassLoader::class);
    }
}
