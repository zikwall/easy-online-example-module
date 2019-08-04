<?php

namespace zikwall\easyonline\modules\example;

use Yii;

class Module extends \zikwall\easyonline\modules\core\components\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'zikwall\easyonline\modules\example\controllers';

    public function getName()
    {
        return 'enCore @example Module';
    }
}
