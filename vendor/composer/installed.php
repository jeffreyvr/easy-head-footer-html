<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
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
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
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
            'reference' => 'd3418191a23d73b6b9702f8ae12d183dc612961c',
            'dev_requirement' => false,
        ),
    ),
);
