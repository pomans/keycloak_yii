<?php
use yii\helpers\Html;
?>

<style>
    .login-card {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        padding: 40px;
        width: 380px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .login-card h3 {
        font-weight: 600;
    }
    .login-card p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
    }
    
    
</style>

<div class="login-card">
    <h3>👋 Welcome Back!</h3>
    <p>Sign in using your <strong>TCEB SSO</strong> account</p>
    
    <?= Html::a(
        '<i class="bi bi-box-arrow-in-right me-2"></i> Login with TCEB SSO',
        ['site/auth', 'authclient' => 'tceb-sso'],
        ['class' => 'btn btn-glass mt-3']
    ) ?>

    <div class="mt-4">
        <small>Need help? <a href="#" class="text-light text-decoration-none">Contact Support</a></small>
    </div>
</div>
