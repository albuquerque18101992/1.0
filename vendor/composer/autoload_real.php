<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc8d80c6abfdf4302050cc60911b4b23f
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

        spl_autoload_register(array('ComposerAutoloaderInitc8d80c6abfdf4302050cc60911b4b23f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc8d80c6abfdf4302050cc60911b4b23f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc8d80c6abfdf4302050cc60911b4b23f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
