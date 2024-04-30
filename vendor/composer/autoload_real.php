<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcff541aaa2ed8ce62b08ea153a6f8cb4
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

        spl_autoload_register(array('ComposerAutoloaderInitcff541aaa2ed8ce62b08ea153a6f8cb4', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcff541aaa2ed8ce62b08ea153a6f8cb4', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcff541aaa2ed8ce62b08ea153a6f8cb4::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}