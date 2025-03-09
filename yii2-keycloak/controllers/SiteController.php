<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\authclient\AuthAction;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'auth' => [
                'class' => AuthAction::class,
                'successCallback' => [$this, 'onAuthSuccess'],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        return $this->render('login');
    }

    public function onAuthSuccess($client)
    {
        $attributes = $client->getUserAttributes();
        Yii::$app->session->set('user', [
            'id' => $attributes['sub'],
            'username' => $attributes['preferred_username'],
            'email' => $attributes['email'] ?? '',
            'fullname' => $attributes['name'] ?? '',
            'id_token' => $client->getAccessToken()->getParam('id_token')
        ]);
        return $this->redirect(['site/dashboard']);
    }

    public function actionDashboard()
    {
        if (!Yii::$app->session->has('user')) {
            return $this->redirect(['site/login']);
        }
        return $this->render('dashboard', [
            'user' => Yii::$app->session->get('user'),
        ]);
    }

    public function actionProfile() {
        $profileUrl = 'https://sso.tceb.or.th/realms/ab072973-334b-45e9-91f8-9bd6b1f060fc/account';
        return $this->redirect($profileUrl);
    }

    public function actionLogout()
    {
        $user = Yii::$app->session->get('user');
        Yii::$app->session->remove('user');
        //return $this->redirect(['site/login']);
        $keycloakLogoutUrl = 'https://sso.tceb.or.th/realms/ab072973-334b-45e9-91f8-9bd6b1f060fc/protocol/openid-connect/logout';

        // URL ที่จะ Redirect กลับมาหลัง Logout เสร็จ (สำคัญมาก ต้องตรงกับที่ตั้งใน Keycloak)
        $redirectUri = urlencode('https://friendly-space-robot-9q5qr9xp5527gpx-8082.app.github.dev/index.php?r=site/login');
        $idTokenHint = $user['id_token'] ?? null;
        // ไปที่ Keycloak เพื่อทำการ logout แล้วกลับมาหน้า Login
        if ($idTokenHint) {
            // ส่ง id_token_hint กลับไปที่ Keycloak ด้วย
            $logoutUrl = "{$keycloakLogoutUrl}?id_token_hint={$idTokenHint}&post_logout_redirect_uri={$redirectUri}";
        } else {
            // fallback (ถ้าไม่มี id_token)
            $logoutUrl = "{$keycloakLogoutUrl}?post_logout_redirect_uri={$redirectUri}";
        }
    
        return $this->redirect($logoutUrl);

    }
}
