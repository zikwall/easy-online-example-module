<?php

namespace zikwall\encore\modules\example;

use Yii;

class Module extends \zikwall\encore\modules\core\components\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'zikwall\encore\modules\example\controllers';

    public function getName()
    {
        return 'enCore @example Module';
    }
}
