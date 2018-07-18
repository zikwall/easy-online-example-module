<?php

namespace zikwall\encore\modules\example\controllers;

use zikwall\encore\modules\core\components\FrontendController;

class DashboardController extends FrontendController
{
    public function init()
    {
        $this->appendPageTitle('Example Dashboard');
        parent::init();
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionModal()
    {
        return $this->renderAjax('modal');
    }
}