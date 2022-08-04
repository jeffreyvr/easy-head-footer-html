<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '859d97f83e201b26d545ae7a33c040dd50e18d1d',
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
            'reference' => '65170ab358aa5a8efd9de96666a46b74dc74513d',
            'dev_requirement' => true,
        ),
        'jeffreyvanrossum/easy-head-footer-html' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '859d97f83e201b26d545ae7a33c040dd50e18d1d',
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
            'reference' => '90e615f3d19d016eb641e936799788522307ffe0',
            'dev_requirement' => false,
        ),
    ),
);
