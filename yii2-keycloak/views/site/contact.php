<?php
use yii\helpers\Html;
?>

<style>
    .contact-card {
        backdrop-filter: blur(15px);
        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        padding: 40px;
        width:500px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .contact-card h1 {
        font-weight: 600;
    }
    .contact-card p {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.9);
    }
    .contact-card .contact-info {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 20px;
        margin-top: 15px;
    }
</style>

<div class="contact-card">
    <h1>📬 Contact Us</h1>
    <p>Have questions or need support? Reach out to us!</p>

    <div class="contact-info">
        <p class="mb-1"><strong>Email:</strong> support@example.com</p>
        <p class="mb-1"><strong>Phone:</strong> +66 1234 5678</p>
        <p><strong>Address:</strong> 123 Main Street, Bangkok, Thailand</p>
    </div>
    <br>
    <p>You can modify the content by editing the file below:</p>
    <div class="file-info">
        <code><?= __FILE__ ?></code>
    </div>
    <div class="mt-4">
        <?= Html::a('Back to Home', ['site/index'], ['class' => 'btn btn-glass mt-3']) ?>
    </div>
</div>
