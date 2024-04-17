<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit752f51cbd2efb7132c4273509046d387
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZipMerge\\' => 9,
        ),
        'P' => 
        array (
            'PHPZip\\Zip\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZipMerge\\' => 
        array (
            0 => __DIR__ . '/..' . '/grandt/phpzipmerge/src/ZipMerge',
        ),
        'PHPZip\\Zip\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpzip/phpzip/src/Zip',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'RelativePath' => __DIR__ . '/..' . '/grandt/relativepath/RelativePath.php',
        'com\\grandt\\BinString' => __DIR__ . '/..' . '/grandt/binstring/BinString.php',
        'com\\grandt\\BinStringStatic' => __DIR__ . '/..' . '/grandt/binstring/BinStringStatic.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit752f51cbd2efb7132c4273509046d387::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit752f51cbd2efb7132c4273509046d387::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit752f51cbd2efb7132c4273509046d387::$classMap;

        }, null, ClassLoader::class);
    }
}
