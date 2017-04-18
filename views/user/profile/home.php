<?php
?>

<?= \humhub\modules\post\widgets\Form::widget(['contentContainer' => $user]); ?>
<?=
 \humhub\modules\stream\widgets\StreamViewer::widget(array(
    'contentContainer' => $user,
    'streamAction' => '//user/profile/stream',
    'messageStreamEmpty' => ($user->permissionManager->can(new \humhub\modules\post\permissions\CreatePost())) ?
            Yii::t('UserModule.views_profile_index', '<b>Your profile stream is still empty</b><br>Get started and post something...') :
            Yii::t('UserModule.views_profile_index', '<b>This profile stream is still empty!</b>'),
    'messageStreamEmptyCss' => ($user->permissionManager->can(new \humhub\modules\post\permissions\CreatePost())) ?
            'placeholder-empty-stream' :
            '',
));
?>