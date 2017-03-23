<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
	$form = ActiveForm::begin([
			'id' => 'owwa-signup',
			'layout' => 'horizontal',
			'fieldConfig' => [
				'template' => '<div class=\'col-sm-12\'>{input}</div>',
			]
		]);
?>
<style type="text/css">
	.form-control
	{
	  border: none;
      border-bottom : 1px solid grey;
      border-radius: 0;
      outline: none;
      -webkit-box-shadow: none !important;
      -moz-box-shadow: none !important;
      box-shadow: none !important;
	}
</style>

<div class="row">
	<div class="col-sm-8" style="margin:50px auto; float: none">
		<div class="col-sm-12" style="border: 1px solid silver; padding-top: 25px; border-radius: 2px 2px 2px 2px">
			<div class="col-sm-12" style="padding: 0;border-bottom: 1px solid silver;margin-bottom: 10px">
				<div class="col-sm-8">
					<h3 style="margin-top: 0; padding-bottom: 5px"><span class="glyphicon glyphicon-lock">Sign Up</span></h3>
				</div>
				<div class="col-sm-4">
					<?= Html::submitButton('Submit', ['class' => 'btn btn-success pull-right', 'name' => 'login-button']) ?>
				</div>
				
			</div>
			<div class="col-sm-12" style="padding: 0">
				<div class="col-sm-4">
					<?= $form->field($signup,'familyName',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('familyName')
						]
					])->textInput(); ?>
				</div>
				<div class="col-sm-4">
					<?= $form->field($signup,'firstName',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('firstName')
						]
					])->textInput(); ?>
				</div>
				<div class="col-sm-4">
					<?= $form->field($signup,'middleName',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('middleName')
						]
					])->textInput(); ?>
				</div>
			</div>
			<div class="col-sm-12" style="padding: 0">
				<div class="col-sm-6">
					<?= $form->field($signup,'completeAddress',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('completeAddress')
						]
					])->textInput(); ?>
				</div>
				<div class="col-sm-6">
					<?= $form->field($signup,'contactNumber',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('contactNumber')
						]
					])->textInput(); ?>
				</div>
			</div>
			<div class="col-sm-12" style="padding: 0">
				<div class="col-sm-6">
					<?= $form->field($signup,'ofwName',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('ofwName')
						]
					])->textInput(); ?>
				</div>
				<div class="col-sm-6">
					<?= $form->field($signup,'relation',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('relation')
						]
					])->textInput(); ?>
				</div>
			</div>
			<div class="col-sm-12" style="padding: 0">
				<div class="col-sm-6">
					<?= $form->field($signup,'username',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('username')
						]
					])->textInput(); ?>
				</div>
				<div class="col-sm-6">
					<?= $form->field($signup,'password',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('password')
						]
					])->textInput(); ?>
				</div>
			</div>
			<div class="col-sm-12">
				<?= $form->field($signup,'emailAddress',[
						'inputOptions' => [
							'placeholder' => $signup->getAttributeLabel('emailAddress')
						]
					])->textInput(); ?>
			</div>
		</div>
	</div>
</div>



<?php ActiveForm::end(); ?>