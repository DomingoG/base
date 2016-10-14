<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Profile;

class UpgradeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //return $this->render('index');
        $name = Profile::find()->where(['user_id' =>
		Yii::$app->user->identity->id])->one();
        //$name = Yii::$app->user->identity->username;
		return $this->render('index',['name' => $name]);
    }

}
