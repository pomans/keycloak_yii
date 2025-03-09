<?php
use yii\helpers\Html;
?>

<div class="container text-center" style="margin-top:50px;">
    <h2>Login</h2>
    <?= Html::a('Login with Keycloak', ['site/auth', 'authclient' => 'tceb-sso'], ['class' => 'btn btn-primary']) ?>
</div>
