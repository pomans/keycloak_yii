<?php
use yii\helpers\Html;

/** @var array $user */
?>

<style>
    .dashboard-card {
        backdrop-filter: blur(12px);
        background: rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        padding: 40px;
        width: 450px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .dashboard-card h2 {
        font-weight: 700;
        font-size: 28px;
        margin-bottom: 20px;
    }
    .dashboard-card p {
        font-size: 16px;
        color: rgba(255, 255, 255, 0.9);
    }
    .dashboard-card .user-info {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 15px;
        margin-bottom: 20px;
    }
</style>

<div class="dashboard-card">
    <h2>📊 User Dashboard</h2>

    <div class="user-info">
        <p><strong>User ID:</strong> <?= Html::encode($user['id']) ?></p>
        <p><strong>Username:</strong> <?= Html::encode($user['username']) ?></p>
        <p><strong>Full Name:</strong> <?= Html::encode($user['fullname']) ?></p>
        <p><strong>Email:</strong> <?= Html::encode($user['email']) ?></p>
    </div>

    <div>
        <?= Html::a('Logout', ['site/logout'], ['class' => 'btn-glass btn-danger']) ?>
        <?= Html::a('Profile', ['site/profile'], ['target'=>'_blank','class' => 'btn-glass btn-primary']) ?>
    </div>
</div>
