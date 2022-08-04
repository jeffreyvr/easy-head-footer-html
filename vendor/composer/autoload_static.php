<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7012803cb0630f04cacb33be7f40b443
{
    public static $files = array (
        '53b3b608b18ef5b655166dcd8c512966' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/helpers.php',
        '1af110379240a8e60238d8a75cb7cce2' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jeffreyvr\\WPSettings\\' => 21,
        ),
        'E' => 
        array (
            'EasyHeadFooterHtml\\' => 19,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jeffreyvr\\WPSettings\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src',
        ),
        'EasyHeadFooterHtml\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'EasyHeadFooterHtml\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings.php',
        'EasyHeadFooterHtml\\EasyHeadFooterHtml' => __DIR__ . '/../..' . '/src/EasyHeadFooterHtml.php',
        'Jeffreyvr\\WPSettings\\Error' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Error.php',
        'Jeffreyvr\\WPSettings\\Flash' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Flash.php',
        'Jeffreyvr\\WPSettings\\Option' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Option.php',
        'Jeffreyvr\\WPSettings\\Options\\Checkbox' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Options/Checkbox.php',
        'Jeffreyvr\\WPSettings\\Options\\Choices' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Options/Choices.php',
        'Jeffreyvr\\WPSettings\\Options\\CodeEditor' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Options/CodeEditor.php',
        'Jeffreyvr\\WPSettings\\Options\\OptionAbstract' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Options/OptionAbstract.php',
        'Jeffreyvr\\WPSettings\\Options\\Select' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Options/Select.php',
        'Jeffreyvr\\WPSettings\\Options\\SelectMultiple' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Options/SelectMultiple.php',
        'Jeffreyvr\\WPSettings\\Options\\Text' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Options/Text.php',
        'Jeffreyvr\\WPSettings\\Options\\Textarea' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Options/Textarea.php',
        'Jeffreyvr\\WPSettings\\Options\\WPEditor' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Options/WPEditor.php',
        'Jeffreyvr\\WPSettings\\Section' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Section.php',
        'Jeffreyvr\\WPSettings\\Tab' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/Tab.php',
        'Jeffreyvr\\WPSettings\\WPSettings' => __DIR__ . '/..' . '/jeffreyvanrossum/wp-settings/src/WPSettings.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7012803cb0630f04cacb33be7f40b443::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7012803cb0630f04cacb33be7f40b443::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7012803cb0630f04cacb33be7f40b443::$classMap;

        }, null, ClassLoader::class);
    }
}
