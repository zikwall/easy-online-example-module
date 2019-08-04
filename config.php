<?php

use zikwall\easyonline\modules\core\Events;

return [
    'id' => 'example',
    'class' => \zikwall\easyonline\modules\example\Module::className(),
    'isCoreModule' => true,
    'events' => [
        [
            'class' => \zikwall\easyonline\modules\example\widgets\HeaderMenu::className(),
            'event' => \zikwall\easyonline\modules\example\widgets\HeaderMenu::EVENT_INIT,
            'callback' => [
                'zikwall\easyonline\modules\example\Events',
                'onHeaderMenuInit'
            ],
        ],
        [
            'class' => \zikwall\easyonline\modules\example\widgets\Sidebar::className(),
            'event' => \zikwall\easyonline\modules\example\widgets\Sidebar::EVENT_INIT,
            'callback' => ['zikwall\easyonline\modules\example\Events', 'onDashboardSidebarInit']
        ],
    ],
    'urlManagerRules' => [
        'dashboard' => 'example/dashboard/index',
    ],
];
?>
