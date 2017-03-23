<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\OwwaForm;

class RequestController extends Controller
{
	
	public function actionIndex()
    {
        $model = new OwwaForm();
        if($model->load(Yii::$app->request->post()))
        {
            $model->createRequest();
        }
        return $this->render('requestForm',
               ['model' => $model
        ]);
    }

    public function actionMyRequest()
    {
    	return $this->render('myrequest');
    }
}


?>