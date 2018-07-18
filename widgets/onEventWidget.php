<?php

namespace zikwall\encore\modules\example\widgets;

use yii\base\Widget;

class onEventWidget extends Widget
{
    public function run()
    {
        return $this->render('onEventWidget', [

        ]);
    }
}