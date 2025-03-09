<?php
use yii\helpers\Html;
?>

<style>
    .about-card {
        backdrop-filter: blur(12px);
        background: rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        padding: 40px;
        width:500px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .about-card h1 {
        font-weight: 700;
        font-size: 28px;
    }
    .about-card p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.9);
    }
</style>

<div class="about-card">
    <h1>ℹ️ About This Application</h1>
    <p>
        This page provides details about your application.<br>
        You can modify the content by editing the file below:
    </p>

    <div class="file-info">
        <code><?= __FILE__ ?></code>
    </div>

    <div class="mt-4">
        <?= Html::a('Return to Home', ['site/index'], ['class' => 'btn btn-glass mt-3']) ?>
    </div>
</div>

