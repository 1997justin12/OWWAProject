<?php

use yii\helpers\Html;

$this->title = 'Welfare Case System';
?>
<div class="row">
	<div class="col-sm-8" style="margin: 25px auto; float:none">
		<div class="col-sm-12">
			<div class="col-sm-6 text-center">
				<?php echo Html::a('File A Case',['request/'],['class' => 'btn btn-primary'])?>
			</div>	
			<div class="col-sm-6 text-center">
				<?php echo Html::a('Scheduled',['request/myrequest'],['class' => 'btn btn-primary'])?>
			</div>
		</div>
	</div>
</div>