<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => 'cf09c6a5b888af6b85691b3c1330109a1079ed5b',
        'name' => 'jeffreyvanrossum/easy-head-footer-html',
        'dev' => true,
    ),
    'versions' => array(
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(
                0 => '2.11.x-dev',
            ),
            'reference' => 'a22f41ff845b8bd4591a933b282270f57dd5bc1d',
            'dev_requirement' => true,
        ),
        'jeffreyvanrossum/easy-head-footer-html' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => 'cf09c6a5b888af6b85691b3c1330109a1079ed5b',
            'dev_requirement' => false,
        ),
        'jeffreyvanrossum/wp-settings' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'library',
            'install_path' => __DIR__ . '/../jeffreyvanrossum/wp-settings',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'reference' => 'bbd5ae87eaee4a8cb1ccdee6ea49a3cb19b81395',
            'dev_requirement' => false,
        ),
    ),
);
