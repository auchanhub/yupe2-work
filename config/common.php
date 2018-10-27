<?php

return [
    'components' => [
        'i18n' => [
            'translations' => [
                'omg.work' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@omg/work/messages',
                    'fileMap' => [
                        'omg.work' => 'omg.work.php'
                    ],
                ],
            ],
        ],
    ],
];
