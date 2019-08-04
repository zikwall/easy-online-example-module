<?php

namespace zikwall\easyonline\modules\example\widgets;

use yii\base\Widget;

class TestWidget extends Widget
{
    public function run()
    {
        return $this->render('testWidget', [

        ]);
    }
}
