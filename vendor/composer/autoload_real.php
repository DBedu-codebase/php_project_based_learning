<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf4f7022f3a57a81777d7a8c188a1315f
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

        spl_autoload_register(array('ComposerAutoloaderInitf4f7022f3a57a81777d7a8c188a1315f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf4f7022f3a57a81777d7a8c188a1315f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf4f7022f3a57a81777d7a8c188a1315f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
