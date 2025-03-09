<?php
use yii\helpers\Html;
?>

<div class="container" style="margin-top:50px;">
    <h1>Welcome to Yii2 Keycloak Demo!</h1>
    <p>
        <?= Html::a('Login via Keycloak', ['site/login'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>
