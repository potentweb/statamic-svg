<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32d79ee24f8ba1e0dee6333082993a2c
{
    public static $classMap = array (
        'ComposerAutoloaderInit32d79ee24f8ba1e0dee6333082993a2c' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit32d79ee24f8ba1e0dee6333082993a2c' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'InlineSvg\\Collection' => __DIR__ . '/..' . '/InlineSvg/Collection.php',
        'InlineSvg\\FileSystem' => __DIR__ . '/..' . '/InlineSvg/FileSystem.php',
        'InlineSvg\\Interfaces\\SourceInterface' => __DIR__ . '/..' . '/InlineSvg/Interfaces/SourceInterface.php',
        'InlineSvg\\NotFoundException' => __DIR__ . '/..' . '/InlineSvg/NotFoundException.php',
        'InlineSvg\\Svg' => __DIR__ . '/..' . '/InlineSvg/Svg.php',
        'InlineSvg\\Transformers\\Cleaner' => __DIR__ . '/..' . '/InlineSvg/transformers/Cleaner.php',
        'Statamic\\Addons\\Svg\\SvgTags' => __DIR__ . '/../..' . '/SvgTags.php',
        'SvgTest' => __DIR__ . '/../..' . '/SvgTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit32d79ee24f8ba1e0dee6333082993a2c::$classMap;

        }, null, ClassLoader::class);
    }
}
