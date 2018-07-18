<?php

use zikwall\encore\modules\core\Events;

return [
    'id' => 'example',
    'class' => \zikwall\encore\modules\example\Module::className(),
    'isCoreModule' => true,
    'events' => [
        [
            'class' => \zikwall\encore\modules\example\widgets\HeaderMenu::className(),
            'event' => \zikwall\encore\modules\example\widgets\HeaderMenu::EVENT_INIT,
            'callback' => [
                'zikwall\encore\modules\example\Events',
                'onHeaderMenuInit'
            ],
        ],
        [
            'class' => \zikwall\encore\modules\example\widgets\Sidebar::className(),
            'event' => \zikwall\encore\modules\example\widgets\Sidebar::EVENT_INIT,
            'callback' => ['zikwall\encore\modules\example\Events', 'onDashboardSidebarInit']
        ],
    ],
    'urlManagerRules' => [
        'dashboard' => 'example/dashboard/index',
    ],
];
?>