<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa965f4a2a6c362f6d22f9d8d635c17b
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bootstrap\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/alexcaussades/bootstrap/src',
        ),
    );

    public static $classMap = array (
        'Bootstrap\\Alerts' => __DIR__ . '/..' . '/alexcaussades/bootstrap/src/alerts.php',
        'Bootstrap\\Bootstrap' => __DIR__ . '/..' . '/alexcaussades/bootstrap/src/bootstrap.php',
        'Bootstrap\\Form' => __DIR__ . '/..' . '/alexcaussades/bootstrap/src/form.php',
        'Bootstrap\\bootstrapButtonTrait' => __DIR__ . '/..' . '/alexcaussades/bootstrap/src/trait/traitButton.php',
        'Bootstrap\\bootstrapLinkTrait' => __DIR__ . '/..' . '/alexcaussades/bootstrap/src/trait/traitlink.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa965f4a2a6c362f6d22f9d8d635c17b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa965f4a2a6c362f6d22f9d8d635c17b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa965f4a2a6c362f6d22f9d8d635c17b::$classMap;

        }, null, ClassLoader::class);
    }
}
