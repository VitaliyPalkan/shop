<?php

/* @var $this yii\web\View */
/* @var $user \shop\entities\User */

$resetLink = Yii::$app->get('frontendUrlManager')->createAbsoluteUrl(['auth/signup/confirm', 'token' => $user->email_confirm_token]);
?>
Hello <?= $user->username ?>,

Follow the link below to reset your password:

<?= $resetLink ?>
