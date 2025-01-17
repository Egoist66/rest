<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitea423dcec4ca2ccd9e3d7e6ea311df3d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitea423dcec4ca2ccd9e3d7e6ea311df3d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitea423dcec4ca2ccd9e3d7e6ea311df3d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitea423dcec4ca2ccd9e3d7e6ea311df3d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
