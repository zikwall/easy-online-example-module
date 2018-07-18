<?php

namespace zikwall\encore\modules\example\widgets;

use zikwall\encore\modules\core\widgets\BaseMenu;

class HeaderMenu extends BaseMenu
{
    public $template = 'headerMenu';

    public function init()
    {
        parent::init();
    }
}