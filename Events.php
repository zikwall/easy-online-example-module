<?php

namespace zikwall\encore\modules\example;

use Yii;
use yii\helpers\Url;
use zikwall\encore\modules\example\widgets\onEventWidget;

class Events extends \yii\base\Object
{
    public static function onHeaderMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Home',
            'url' => Url::to(['/default']),
            'sortOrder' => 100,
            'isActive' => Yii::$app->controller->module
                && Yii::$app->controller->module->id == 'core'
                && Yii::$app->controller->id == 'default'
                && Yii::$app->controller->action->id == 'home'
        ]);

        $event->sender->addItem([
            'label' => 'Dashboard',
            'url' => Url::to(['/dashboard']),
            'sortOrder' => 200,
            'isActive' => Yii::$app->controller->module
                && Yii::$app->controller->module->id == 'example'
                && Yii::$app->controller->id == 'dashboard'
                && Yii::$app->controller->action->id == 'index'
        ]);

        $event->sender->addItem([
            'label' => 'Have an issue?',
            'url' => 'https://github.com/zikwall/encore/issues',
            'sortOrder' => 500,
        ]);

        $event->sender->addItem([
            'label' => 'Твиттер',
            'url' => ('#'),
            'icon' => '<i class="fa fa-twitter"></i>',
            'sortOrder' => 600,
            'isVisible' => !Yii::$app->user->isGuest
        ]);

        $event->sender->addItem([
            'label' => 'Фейсбук',
            'url' => ('#'),
            'icon' => '<i class="fa fa-facebook-square"></i>',
            'sortOrder' => 700,
            'isVisible' => !Yii::$app->user->isGuest
        ]);

        $event->sender->addItem([
            'label' => 'Инстаграм',
            'url' => ('#'),
            'icon' => '<i class="fa fa-instagram"></i>',
            'sortOrder' => 800,
            'isVisible' => !Yii::$app->user->isGuest
        ]);
    }

    public function onDashboardSidebarInit($event)
    {
        $event->sender->addWidget(onEventWidget::className(), [
        ], ['sortOrder' => 100]);
    }
}
