<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'OWWA Help System';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">


    <div class="login-container col-sm-12">
        <div class="col-sm-4" style="margin: 20px auto; float:none; border: 1px solid rgba(130, 123, 123, 0.45);border-radius: 2px 2px 2px 2px;background-color: rgba(123, 122, 122, 0.06);">
        <div class=" col-sm-12 alert-success" style="margin-top: 10px;line-height: 30px;border-radius: 2px 2px 2px 2px;box-shadow: 1px 1px 3px -2px #2d2c2c;">Enter Credentials</div>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

                <?= $form->field($model, 'username')->textInput() ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group  text-center"">
                    <div class="col-sm-12" > 
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
            </div>
    </div>


</div>
