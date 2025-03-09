<?php
use yii\helpers\Html;
?>

<style>
    .home-card {
        backdrop-filter: blur(12px);
        background: rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        padding: 40px;
        width: 450px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .home-card h1 {
        font-weight: 700;
        font-size: 28px;
    }
    .home-card p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.9);
    }
    .home-card .file-info {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 10px;
        display: inline-block;
        margin-top: 10px;
    }
 box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }
</style>

<div class="home-card">
    <h1>🚀 Yii2 + Keycloak Demo</h1>
    <p>
        This is your application's home page.<br>
        To customize this page, edit the file below:
    </p>

    <div class="file-info">
        <code><?= __FILE__ ?></code>
    </div>

    <div class="mt-4">
        <?= Html::a('Login with TCEB SSO', ['site/login'], ['class' => 'btn btn-glass mt-3']) ?>
    </div>
</div>