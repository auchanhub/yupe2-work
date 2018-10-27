<?php
namespace omg\work;

use yupe\base\Plugin as BasePlugin;
use Yii;

class Plugin extends BasePlugin
{
    protected $version = '1.0';

    /**
     * @var array
     */
    public $require = [
        'amylabs/yupe2-user',
    ];

    /**
     * @return array
     */
    public function getNavigation()
    {
        return [
            'work' => [
                'label' => Yii::t('omg.work', 'Work'),
                'icon' => 'briefcase',
                'url' => '#',
                'items' => [
                    'work' => [
                        'label' => Yii::t('amylabs.content', 'Work'),
                        'url' => ['/work/index'],
                        'icon' => 'briefcase',
                        'visible' => \Yii::$app->getUser()->can('omg.work.manage-work'),
                        'items' => [
                            'index' => [
                                'label' => Yii::t('amylabs.content', 'All works'),
                                'url' => ['/work/work/index'],
                                'icon' => 'list',
                            ],
                            'create' => [
                                'label' => Yii::t('amylabs.content', 'Add work'),
                                'url' => ['/work/work/create'],
                                'icon' => 'plus',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }

    public function getName()
    {
        return Yii::t('omg.work', 'Work');
    }

    public function getDescription()
    {
        return Yii::t('omg.work', 'Work module for yupe2');
    }
}
