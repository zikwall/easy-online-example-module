<?php

namespace zikwall\easyonline\modules\example\widgets;

use zikwall\easyonline\modules\core\widgets\BaseMenu;
use yii\helpers\Url;

class LeftStackMenu extends BaseMenu
{
    public $template = "leftStackMenu";

    public function init()
    {
        $this->addItem([
            'label' => 'Header',
            'url' => Url::toRoute('/user/auth/logout'),
            'sortOrder' => 100,
            'htmlOptions' => [
                'class' => 'header'
            ]
        ]);

        $this->addItem([
            'label' => 'Menu Item 1',
            'url' => Url::toRoute('/user/auth/logout'),
            'sortOrder' => 1000,
        ]);

        $this->addItem([
            'label' => '---',
            'url' => '#',
            'sortOrder' => 1100,
        ]);

        $this->addItem([
            'label' => 'Menu Item 2',
            'url' => Url::toRoute('/user/auth/logout'),
            'sortOrder' => 1200,
        ]);

        $this->addItem([
            'label' => 'Menu Item 3',
            'id' => 'account-logout',
            'pjax' => false,
            'url' => Url::toRoute('/example/dashboard/modal'),
            'sortOrder' => 1300,
            'htmlOptions' => [
                'data-target' => '#globalModal'
            ]
        ]);

        parent::init();
    }
}
