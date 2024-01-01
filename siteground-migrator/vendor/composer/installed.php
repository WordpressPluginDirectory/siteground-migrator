<?php return array(
    'root' => array(
        'name' => 'siteground/siteground-migrator',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'cf22a15c292461ee3427b8b83437452ba401b14b',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '2createstudio/shuttleexport' => array(
            'pretty_version' => 'dev-namespaced',
            'version' => 'dev-namespaced',
            'reference' => '8f370b5a9f9cf11c5ed16f12cf2edb0a0f5f1e37',
            'type' => 'library',
            'install_path' => __DIR__ . '/../2createStudio/ShuttleExport',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'siteground/siteground-helper' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '4296c1c29c5c1b27cd3e4050daa8d1e4d3a4c7a6',
            'type' => 'library',
            'install_path' => __DIR__ . '/../siteground/siteground-helper',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'siteground/siteground-i18n' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '714db79a69f373acd8f8023aededc27e94463041',
            'type' => 'library',
            'install_path' => __DIR__ . '/../siteground/siteground-i18n',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'siteground/siteground-migrator' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'cf22a15c292461ee3427b8b83437452ba401b14b',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'symfony/process' => array(
            'pretty_version' => 'v2.0.25',
            'version' => '2.0.25.0',
            'reference' => '7d92786475f2b7d4a4f4be4f0076732ace155df2',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/process/Symfony/Component/Process',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);