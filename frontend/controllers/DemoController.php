<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

namespace frontend\controllers;
use frontend\models\Contact;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

class DemoController extends Controller

{
    public function actionContact()
    {
        $model = new Contact();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            echo $model->email . '-' . $model->name;
        } else {
            return $this->render('contact', ['model' => $model]);
        }
    }


    public function actionIndex()
    {
        return $this->render('index');

    }

    public function actionHelo()
    {
        return $this->render('helo');
    }
}