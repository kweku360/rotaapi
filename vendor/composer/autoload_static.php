<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0f85a6e2188fd4deda5bfb987020241
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Validator\\' => 28,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\Console\\' => 26,
            'Symfony\\Component\\Config\\' => 25,
            'Slim\\Views\\' => 11,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/validator',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/php-view/src',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
            'Propel' => 
            array (
                0 => __DIR__ . '/..' . '/propel/propel/src',
            ),
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'Base\\Clubinfo' => __DIR__ . '/../..' . '/propelclasses/Base/Clubinfo.php',
        'Base\\ClubinfoQuery' => __DIR__ . '/../..' . '/propelclasses/Base/ClubinfoQuery.php',
        'Base\\Mediastore' => __DIR__ . '/../..' . '/propelclasses/Base/Mediastore.php',
        'Base\\MediastoreQuery' => __DIR__ . '/../..' . '/propelclasses/Base/MediastoreQuery.php',
        'Base\\Project' => __DIR__ . '/../..' . '/propelclasses/Base/Project.php',
        'Base\\ProjectQuery' => __DIR__ . '/../..' . '/propelclasses/Base/ProjectQuery.php',
        'Base\\Projectaccount' => __DIR__ . '/../..' . '/propelclasses/Base/Projectaccount.php',
        'Base\\ProjectaccountQuery' => __DIR__ . '/../..' . '/propelclasses/Base/ProjectaccountQuery.php',
        'Base\\Projectdisplay' => __DIR__ . '/../..' . '/propelclasses/Base/Projectdisplay.php',
        'Base\\ProjectdisplayQuery' => __DIR__ . '/../..' . '/propelclasses/Base/ProjectdisplayQuery.php',
        'Clubinfo' => __DIR__ . '/../..' . '/propelclasses/Clubinfo.php',
        'ClubinfoQuery' => __DIR__ . '/../..' . '/propelclasses/ClubinfoQuery.php',
        'Emailutils' => __DIR__ . '/../..' . '/classes/Emailutils.php',
        'Map\\ClubinfoTableMap' => __DIR__ . '/../..' . '/propelclasses/Map/ClubinfoTableMap.php',
        'Map\\MediastoreTableMap' => __DIR__ . '/../..' . '/propelclasses/Map/MediastoreTableMap.php',
        'Map\\ProjectTableMap' => __DIR__ . '/../..' . '/propelclasses/Map/ProjectTableMap.php',
        'Map\\ProjectaccountTableMap' => __DIR__ . '/../..' . '/propelclasses/Map/ProjectaccountTableMap.php',
        'Map\\ProjectdisplayTableMap' => __DIR__ . '/../..' . '/propelclasses/Map/ProjectdisplayTableMap.php',
        'Mediastore' => __DIR__ . '/../..' . '/propelclasses/Mediastore.php',
        'MediastoreQuery' => __DIR__ . '/../..' . '/propelclasses/MediastoreQuery.php',
        'Project' => __DIR__ . '/../..' . '/propelclasses/Project.php',
        'ProjectQuery' => __DIR__ . '/../..' . '/propelclasses/ProjectQuery.php',
        'Projectaccount' => __DIR__ . '/../..' . '/propelclasses/Projectaccount.php',
        'ProjectaccountQuery' => __DIR__ . '/../..' . '/propelclasses/ProjectaccountQuery.php',
        'Projectdisplay' => __DIR__ . '/../..' . '/propelclasses/Projectdisplay.php',
        'ProjectdisplayQuery' => __DIR__ . '/../..' . '/propelclasses/ProjectdisplayQuery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0f85a6e2188fd4deda5bfb987020241::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0f85a6e2188fd4deda5bfb987020241::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd0f85a6e2188fd4deda5bfb987020241::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd0f85a6e2188fd4deda5bfb987020241::$classMap;

        }, null, ClassLoader::class);
    }
}