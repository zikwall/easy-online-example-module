<?php
    use yii\bootstrap\Html;
?>

<?php foreach ($this->context->getItems() as $item): ?>
    <?php if ($item['label'] == '---'): ?>
        <div class="dropdown-divider"></div>
    <?php elseif($item['htmlOptions']['class'] == 'header'): ?>
        <a class="dropdown-header"><?= $item['label']; ?></a>
    <?php else: ?>
        <?php
            $item['htmlOptions']['class'] = 'dropdown-item';
            if(!empty($item['id'])) {
                $item['htmlOptions']['id'] = $item['id'];
            }
            $item['htmlOptions']['data-pjax-prevent'] = isset($item['pjax']) && $item['pjax'] === false ? true : false;
        ?>
        <?= Html::a($item['icon'] . ' ' . $item['label'], $item['url'], $item['htmlOptions']); ?>
    <?php endif; ?>
<?php endforeach; ?>
