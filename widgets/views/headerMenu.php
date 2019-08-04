<?php
    use zikwall\easyonline\modules\core\libs\Html;
?>
<nav class="navbar navbar-expand-lg bg-primary fixed-top">
    <div class="container">
        <div class="dropdown button-dropdown">
            <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?= \zikwall\easyonline\modules\example\widgets\LeftStackMenu::widget(); ?>
            </div>
        </div>
        <div class="navbar-translate">
            <a class="navbar-brand" href="javascript::void();" rel="tooltip" title="" data-placement="bottom" target="_blank">
                enCore
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <?php foreach ($this->context->getItems() as $item) : ?>
                    <?php $item['htmlOptions']['class'] = 'nav-link'; ?>
                    <li class="nav-item <?= $item['isActive'] ? 'active' : '';?> <?= isset($item['id']) ? $item['id'] : '' ?>">
                        <?php if(!empty($item['icon'])): ?>
                            <?php
                                $item['htmlOptions']['data-original-title'] = $item['label'];
                                $item['htmlOptions']['data-placement'] = 'bottom';
                                $item['htmlOptions']['rel'] = 'tooltip';
                            ?>
                            <?= Html::a($item['icon'], $item['url'], $item['htmlOptions']); ?>
                            <?= Html::tag('p', $item['label'], ['class' => 'd-lg-none d-xl-none'])?>
                        <?php else: ?>
                            <?= Html::a($item['label'], $item['url'], $item['htmlOptions']); ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
                <?php if (Yii::$app->user->isGuest): ?>
                    <button href="#" class="btn btn-primary" data-action-click="ui.modal.load" data-action-url="<?= \yii\helpers\Url::toRoute('/user/auth/login'); ?>">
                        <?php if (Yii::$app->getModule('user')->settings->get('auth.anonymousRegistration')): ?>
                            <?= Yii::t('UserModule.base', 'Sign in / up'); ?>
                        <?php else: ?>
                            <?= Yii::t('UserModule.base', 'Sign in'); ?>
                        <?php endif; ?>
                    </button>
                <?php else: ?>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                        <i class="now-ui-icons users_circle-08" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <?= \zikwall\easyonline\modules\user\widgets\AccountTopMenu::widget(); ?>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
