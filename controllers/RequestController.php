<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\ArrayHelper;
use app\models\OwwaForm;
use app\models\User;


class RequestController extends Controller
{
	
	public function actionIndex()
    {
     
        return $this->render('myrequest');
    }

    public function actionRequestForm()
    {
    	
    	$model = new OwwaForm();


        $user = User::find()
            ->where(['id' => Yii::$app->user->id])
            ->one();

      //  $cases = NatureOfCase::find()->all();
     //   $options = ArrayHelper::map($cases, 'id', 'case_name');

        if($model->load(Yii::$app->request->post()))
        {
            $model->createRequest();
        }
        return $this->render('requestForm',
               ['model' => $model,
                'user' => $user
        ]);
    }
}


?>