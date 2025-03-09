<?php
use yii\helpers\Html;

/** @var array $user */
?>

<div class="container" style="margin-top:50px;">
    <h2>Dashboard</h2>
    <p><strong>User ID:</strong> <?= Html::encode($user['id']) ?></p>
    <p><strong>Username:</strong> <?= Html::encode($user['username']) ?></p>
    <p><strong>Full Name:</strong> <?= Html::encode($user['fullname']) ?></p>
    <p><strong>Email:</strong> <?= Html::encode($user['email']) ?></p>
    <?= Html::a('Logout', ['site/logout'], ['class' => 'btn btn-danger']) ?>
</div>
