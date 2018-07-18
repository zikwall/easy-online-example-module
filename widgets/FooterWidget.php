<?php

namespace zikwall\encore\modules\example\widgets;

use yii\base\Widget;

class FooterWidget extends Widget
{
    public function run()
    {
        return $this->render('footerWidget');
    }
}