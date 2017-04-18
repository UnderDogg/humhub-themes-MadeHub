<?php

humhub\assets\TabbedFormAsset::register($this);
humhub\modules\user\widgets\AccountMenu::markAsActive(['/user/account/edit-settings']);
?>

<div class="panel-heading">
    <?= Yii::t('UserModule.account', '<strong>User</strong> settings'); ?> <?= \humhub\widgets\DataSaved::widget(); ?>
</div>

<?= humhub\modules\user\widgets\AccountSettingsMenu::widget(); ?>

<div class="panel-body">
    <?= $content; ?>
</div>