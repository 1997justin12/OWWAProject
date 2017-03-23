<?php
use yii\helpers\Html;
?>
<div class="row" style="padding-left: 15px;padding-right: 20px">
	<div class="col-sm-9">
       <div class="row">
            <div class="col-sm-12 text-center">
                 <h1 style="text-transform: uppercase">filed request history</h1>
            </div>
       </div>
   </div>
   <div class="col-sm-9">
   	<table class="table table-hover">
   		<thead>
   			<th>Date Requested</th>
   			<th>OFW Name</th>
   			<th>Foreign Agency</th>
   			<th>Local Agency</th>
   			<th>Action Taken</th>
   			<th>Status</th>
   		</thead>
   	</table>
   </div>
	
	<div class="col-sm-3" style="margin-top: 20px">
		 <div class="row">
            <div class="col-sm-12">
                 <ul class="list-group">
                  <?= Html::a('Request Form', ['request/'], ['class'=>'list-group-item', 'style' => 'margin-top: 10px; margin-right: 5px; border-radius: 0 0 0 0']) ?>
                  <?= Html::a('My Request', ['request/my-request'], ['class'=>'list-group-item ', 'style' => ' margin-right: 5px; border-radius: 0 0 0 0']) ?>
                </ul>
            </div>
       </div>
	</div>


</div>