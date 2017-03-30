<?php
use yii\helpers\Html;
use app\models\User;
?>
<div class="row" style="padding-left: 15px;padding-right: 20px">
   <div class="col-sm-9" style="margin-top: 20px">
     <div class="col-sm-12">
       <div class="col-sm-3">
         <select class="form-control">
           
         </select>
        </div>
        <div class="col-sm-3">
         <select class="form-control">
           
         </select>
        </div>
     </div>

     <div class="col-sm-12" style="margin-top: 10px">
       <table class="table table-responsive">
         <thead style="font-size: .7em;align-content: justify">
           <th>Date Requested</th>
           <th>Welfare Case Number</th>
           <th>OFW Recepient</th>
           <th>Case</th>
           <th>Action Taken</th>
           <th>Date Taken</th>
         </thead>
       </table>
     </div>
   </div>
   <div class="col-sm-3" style="margin-top: 100px">
     <div class="row">
        <?php echo $this->render('_sidebar'); ?>
     </div>
   </div>
   
</div>