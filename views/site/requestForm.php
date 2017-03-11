<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'OWWA Web Help System';
?>
  <?php $form = ActiveForm::begin([
                'id' => 'owwa-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                   'template' => "<div class=\"col-sm-11\">{input}</div>",
                ],

            ]); ?>
<style type="text/css">
    .form-group
    {
        margin-bottom: 2px;
    }
</style>
<div class="row" style="padding-left: 15px;padding-right: 20px">
   <div class="col-sm-9">
       <div class="row">
            <div class="col-sm-12 text-center">
                 <h1 style="text-transform: uppercase">request for assistance form</h1>
            </div>
       </div>
   </div>
   <div class="col-sm-9">
       <div class="row" style="margin-bottom: 20px">
           <div class="col-sm-6 ">
                    <?= $form->field($model,'dateFiled',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('dateFiled'),
                        ]
                      ])->textInput()?>
                    <?= $form->field($model,'dateEndorsed',[
                      'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('dateEndorsed')
                      ]
                    ])->textInput()?>
                    <?= $form->field($model,'lastActionDate',[
                      'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('lastActionDate')
                      ]
                    ])->textInput()?>
                    <?= $form->field($model,'totalAction',[
                      'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('totalAction')
                      ]
                    ])->textInput()?>
                    <?= $form->field($model,'noActionFortheMonth',[
                      'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('noActionFortheMonth')
                      ]
                    ])->textInput()?>
                    <?= $form->field($model,'assistanceNeeded',[
                      'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('assistanceNeeded')
                      ]
                    ])->textInput()?>
                    <?= $form->field($model,'locatorNo',[
                      'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('locatorNo')
                      ]
                    ])->textInput()?>
                    <?= $form->field($model,'nameOfOFW',[
                      'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('nameOfOFW')
                      ]
                    ])->textInput()?>
                    <?= $form->field($model,'gender',[
                      'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('gender')
                      ]
                    ])->textInput()?>
                    <?= $form->field($model,'age',[
                      'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel('age')
                      ]
                    ])->textInput()?>    
           </div>
           <div class="col-sm-6">
                    <?= $form->field($model,'nameOfEmployer')->textInput()?>
                    <?= $form->field($model,'addressOfEmployer')->textInput()?>
                    <?= $form->field($model,'contactNumber')->textInput()?>
                    <?= $form->field($model,'position')->textInput()?>
                    <?= $form->field($model,'nameOfForeignAgency')->textInput()?>
                    <?= $form->field($model,'nameOfLocalAgency')->textInput()?>
                    <?= $form->field($model,'jobCategory')->textInput()?>
                    <?= $form->field($model,'jobSite')->textInput()?>
                    <?= $form->field($model,'case')->textInput()?>
                    <?= $form->field($model,'requestingParty')->textInput()?>
                    <?= $form->field($model,'contactNumberOfRequestor')->textInput()?>
           </div>
       </div>
        <div class="row">
                <div class="col-sm-6">
                    <?= $form->field($model,'requestingParty')->textInput()?>
                    <?= $form->field($model,'contactNumberOfRequestor')->textInput()?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model,'addressOfRequestor')->textInput()?>
                    <?= $form->field($model,'province')->textInput()?>
                </div>
               
        </div>

   </div>
   <div class="col-sm-3" style="margin-top: 20px">
       <div class="row">
            <div class="col-sm-12">
                 <ul class="list-group">
                  <li class="list-group-item active">Fill Up Form</li>
                  <li class="list-group-item">Requests<span class="badge">12</span></li>
                </ul>
            </div>
       </div>
       <div class="row" style="margin-top: 30px">
       <div class="col-sm-12">
           <div class="panel panel-default">
               <div class="panel-heading text-center">
                Action Number
               </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1>56</h1>
                        </div>
                    </div>
                    <div class="row text-center">
                          <div class="form-group  text-center"">
                    <div class="col-sm-12" > 
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                    </div>
                </div>
                    </div>
               </div>
           </div>
       </div>
       </div>
   </div>
</div>
<<?php ActiveForm::end() ?>
