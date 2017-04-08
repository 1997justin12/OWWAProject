<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
$this->title = 'OWWA Web Help System';
?>
  <?php $form = ActiveForm::begin([
                'id' => 'owwa-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                   'template' => "<div class=\"col-sm-12\">{input}</div>",
                ],

            ]); ?>

<style type="text/css">
    .form-group
    {
        margin-bottom: 2px;
    }
    .form-control
    {
      border: none;
      border-bottom : 1px solid grey;
      border-radius: 0;
      outline: none;
      -webkit-box-shadow: none !important;
      -moz-box-shadow: none !important;
      box-shadow: none !important;
      font-size: .8em;
      font-weight: bold;
    }
    .checkbox-inline,.radio-inline
    {
      font-size: .8em;
    }
     .checkbox-inline>span,.radio-inline>span
    {
      padding-top: 10px;
      line-height: 20px;
    }
</style>

<div class="row" style="padding-left: 15px;padding-right: 20px">
   <div class="col-sm-9">

           <div class="row" style="margin-bottom: 20px">
             <div class="col-sm-12  ">
              <div class="row">
                <div class="col-sm-12 text-center">
                     <h1 style="text-transform: uppercase">request for assistance form</h1>
                </div>
              </div>
           </div>

           <div class="col-sm-12" >
              <div class="col-sm-12" >
                <div class="col-sm-6" >
                  <?= $form->field($model,'dateFiled',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'dateFiled' ),
                        'disabled' => true,
                        'value' => date('Y-m-d'),
                        'style' => 'cursor: pointer; background-color: white'
                        ]
                      ])->textInput()?>
             
                </div>
                <div class="col-sm-6" >
                  <?= $form->field($model,'welfareCaseNumber',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'welfareCaseNumber' )
                        ]
                      ])->textInput()?>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-4">
                  <?= $form->field($model,'familyName',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'familyName' ),
                        'value' => $user->family_name
                        ]
                      ])->textInput()?>
                </div>
                <div class="col-sm-4">
                 <?= $form->field($model,'givenName',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'givenName' ),
                        'value' => $user->first_name
                        ]
                      ])->textInput()?> 
                </div>
                <div class="col-sm-4">
                 <?= $form->field($model,'middleName',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'middleName' ),
                        'value' => $user->middle_name
                        ]
                      ])->textInput()?> 
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-12">
                 <?= $form->field($model,'completeAddress',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'completeAddress' ),
                        'value' => $user->complete_address
                        ]
                      ])->textInput()?> 
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-6">
                  <?= $form->field($model,'relationshipToOfw',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'relationshipToOfw' ),
                        'value' => $user->relation
                        ]
                      ])->textInput()?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($model,'contactNumber',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'contactNumber' ),
                        'value' => $user->contact_number
                        ]
                      ])->textInput()?>
                </div>
              </div> 
           </div>

          <div class="col-sm-12">
            <div class="col-sm-12">
              <div class="col-sm-12">
                <hr>
              </div>
            </div> 
           </div>
           <div class="col-sm-12">
                <?= $form->field($model, 'natureOfCase[]', [
                  'options' => [
                    'class' => 'checkbox',
                    'style' => 'font-size:0.8em'
                  ]
                ])->checkboxList([
                
                 'a' => 'Proof of Relationship',
                  'b' => 'Latest letter/e-mail',
                  'c' => 'Employmet Contract',
                  'd' => 'OWWA OR/COC',
                  'e' => 'Latest OEC/OFW Info',
                  'f' => 'Passport Copy',
                  'g' => 'Others'
                ],[
                'item' => function($index, $label, $name, $checked, $value) {
                                    $return = '<div class="col-sm-4">';
                                    $return .= '<label class="checkbox-inline">';
                                    $return .= '<input type="checkbox" name="' . $name . '" value="' . $value . '" tabindex="3">';
                                    $return .= '<i></i>';
                                    $return .= '<span>' . ucwords($label) . '</span>';
                                    $return .= '</label></div>';
                                    return $return;}
                ]
                ); ?>
           </div>

           <div class="col-sm-12">
            <div class="col-sm-12">
              <div class="col-sm-12">
                <hr>
              </div>
            </div> 
           </div>

           <div class="col-sm-12">
             <div class="col-sm-12">
               <div class="col-sm-4">
                 <?= $form->field($model,'ofwFamilyName',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'ofwFamilyName' ),
                        ]
                      ])->textInput()?>
               </div>
               <div class="col-sm-4">
                 <?= $form->field($model,'ofwGivenName',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'ofwGivenName' ),
                        ]
                      ])->textInput()?>
               </div>
               <div class="col-sm-4">
                 <?= $form->field($model,'ofwMiddleName',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'ofwMiddleName' ),
                        ]
                      ])->textInput()?>
               </div>
               </div>
               <div class="col-sm-12">
               <div class="col-sm-6">
                 <?= $form->field($model,'ofwOtherName',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'ofwOtherName' ),
                        ]
                      ])->textInput()?>
               </div>
               <div class="col-sm-6">
                 <?= $form->field($model,'ofwContactNumber',[
                        'inputOptions' => [
                        'placeholder' => $model->getAttributeLabel( 'ofwContactNumber' ),
                        ]
                      ])->textInput()?>
               </div>
              </div>
              <div class="col-sm-12"> 
                <div class="col-sm-6">
                  <?= $form->field($model, 'sex[]')->radioList(['male' => 'Male', 'female' => 'Female'],[
                    'item' => function($index, $label, $name, $checked, $value) {
                                    $return = '<div class="col-sm-6">';
                                    $return .= '<label class="radio-inline">';
                                    $return .= '<input type="radio" name="' . $name . '" value="' . $value . '" tabindex="3">';
                                    $return .= '<i></i>';
                                    $return .= '<span>' . ucwords($label) . '</span>';
                                    $return .= '</label></div>';
                                    return $return;
                                }
                  ]); ?>
                </div>
                <div class="col-sm-6">
                  <?= $form->field($model, 'roamingNumber',[
                    'inputOptions' => [
                      'placeholder' => $model->getAttributeLabel('roamingNumber')
                    ]
                  ])  ?>
                </div>
              </div>
             <div class="col-sm-12"> 
               <div class="col-sm-3">
                  <?= $form->field($model, 'birthdate')->widget(DatePicker::classname(), [
                      'options' => ['placeholder' =>  $model->getAttributeLabel('birthdate')],
                      'type' => DatePicker::TYPE_INPUT,
                      'removeButton' => false,
                      'pluginOptions' => [
                          'autoclose'=>true,
                          'format' => 'mm/dd/yyyy'
                          ]
                      ]);
                ?> 
               </div>
               <div class="col-sm-2">
                 <?= $form->field($model,'age',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('age')
                  ]
                 ]); ?>
               </div>
               <div class="col-sm-6 pull-right" style="margin-right: 10px">
                 <?= $form->field($model, 'civilStatus[]', [
                    'options' => [
                      'style' => 'font-size: 1em',

                    ]
                  ])->radioList([
                  'single' => 'Single',
                  'married' => 'Married',
                  'widow' => 'Widow/er',
                  'separated' => 'Separated'
                 ],[
                  'item' => function($index,$label,$name,$checked,$value){
                    $return = '<div class="col-sm-3">';
                    $return .= '<lable class="radio-inline">';
                    $return .= '<input type="radio" name="'.$name.'" value="'.$value.'" tabindex="3">';
                    $return .= '<i></i>';
                    $return .= '<span>'.ucwords($label).'</span>';
                    $return .= '</lable></div>';
                    return $return;
                  }
                 ]) ?>
               </div>
             </div>
             <div class="col-sm-12">
               <?= $form->field($model, 'classification[]', [
                    'options' => [
                      'style' => 'font-size: 1em',
                    ]
                  ])->radioList([
                  '1' => 'Landbase OFW',
                  '2' => 'Seabase OFW',
                 ],[
                  'item' => function($index,$label,$name,$checked,$value){
                    $return = '<div class="col-sm-6">';
                    $return .= '<lable class="radio-inline">';
                    $return .= '<input type="radio" name="'.$name.'" value="'.$value.'" tabindex="3">';
                    $return .= '<i></i>';
                    $return .= '<span>'.ucwords($label).'</span>';
                    $return .= '</lable></div>';
                    return $return;
                  }
                 ]) ?>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-6">
                 <?=  $form->field($model,'natureOfWork',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('natureOfWork')
                  ]
                 ])?>
               </div>
               <div class="col-sm-6">
                 <?=  $form->field($model,'highestEducation',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('highestEducation')
                  ]
                 ])?>
               </div>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-6">
                 <?=  $form->field($model,'destination',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('destination')
                  ]
                 ])?>
               </div>
               <div class="col-sm-6">
                 <?= $form->field($model, 'departureDate')->widget(DatePicker::classname(), [
                      'options' => ['placeholder' => $model->getAttributeLabel('departureDate')],
                      'type' => DatePicker::TYPE_INPUT,
                      'removeButton' => false,
                      'pluginOptions' => [
                          'autoclose'=>true,
                          'format' => 'mm-dd-yyyy'
                          ]
                      ]);
                ?> 
               </div>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-12">
                 <?= $form->field($model,'nameOfEmployer',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('nameOfEmployer')
                  ]
                 ]) ?>
               </div>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-12">
                 <?= $form->field($model,'adressOfEmployer',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('adressOfEmployer')
                  ]
                 ]) ?>
               </div>
             </div>
           
           <div class="col-sm-12">
               <div class="col-sm-6">
                 <?= $form->field($model,'contactNumberEmployer',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('contactNumberEmployer')
                  ]
                 ]) ?>
               </div>
              <div class="col-sm-6">
                 <?= $form->field($model,'telNumberEmployer',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('telNumberEmployer')
                  ]
                 ]) ?>
               </div>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-6">
                 <?= $form->field($model,'foreignAgency',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('foreignAgency')
                  ]
                 ]) ?>
               </div>
              <div class="col-sm-6">
                 <?= $form->field($model,'telFoxNumberFore',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('telFoxNumberFore')
                  ]
                 ]) ?>
               </div>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-12">
                 <?= $form->field($model,'philippineAgency',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('philippineAgency')
                  ]
                 ]) ?>
               </div>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-12">
                 <?= $form->field($model,'philippineAgencyAddress',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('philippineAgencyAddress')
                  ]
                 ]) ?>
               </div>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-6">
                 <?= $form->field($model,'telNumberPhil',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('telNumberPhil')
                  ]
                 ]) ?>
               </div>
              <div class="col-sm-6">
                 <?= $form->field($model,'telFoxNumberPhil',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('telFoxNumberPhil')
                  ]
                 ]) ?>
               </div>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-6">
                 <?= $form->field($model,'contactPersonAgency',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('contactPersonAgency')
                  ]
                 ]) ?>
               </div>
              <div class="col-sm-6">
                 <?= $form->field($model,'mobilePhone',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('mobilePhone')
                  ]
                 ]) ?>
               </div>
             </div>
             <div class="col-sm-12">
               <div class="col-sm-6">
                 <?= $form->field($model,'acquaintanceAbroad',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('acquaintanceAbroad')
                  ]
                 ]) ?>
               </div>
              <div class="col-sm-6">
                 <?= $form->field($model,'acquaintanceContact',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('acquaintanceContact')
                  ]
                 ]) ?>
               </div>
             </div>
           </div>

           <div class="col-sm-12">
            <div class="col-sm-12">
              <div class="col-sm-12">
                <hr>
              </div>
            </div> 
           </div>

           <div class="col-sm-12">
             <div class="col-sm-12">
               <?= $form->field($model, 'supportingDocument[]', [
                    'options' => [
                      'style' => 'font-size: .8em',
                    ]
                  ])->radioList([
                  'a' => 'Proof of Relationship',
                  'b' => 'Latest letter/e-mail',
                  'c' => 'Employmet Contract',
                  'd' => 'OWWA OR/COC',
                  'e' => 'Latest OEC/OFW Info',
                  'f' => 'Passport Copy',
                  'g' => 'Others'
                 ],[
                  'item' => function($index,$label,$name,$checked,$value){
                    $return = '<div class="col-sm-3">';
                    $return .= '<lable class="checkbox-inline">';
                    $return .= '<input type="checkbox" name="'.$name.'" value="'.$value.'" tabindex="3">';
                    $return .= '<i></i>';
                    $return .= '<span>'.ucwords($label).'</span>';
                    $return .= '</lable></div>';
                    return $return;
                  }
                 ]) ?>
             </div>
           </div>

           <div class="col-sm-12">
            <div class="col-sm-12">
              <div class="col-sm-12">
                <hr>
              </div>
            </div> 
           </div>

           <div class="col-sm-12">
             <div class="col-sm-12">
              <div class="col-sm-12">
                <?= $form->field($model,'assistanceSought',[
                  'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('assistanceSought')
                  ]
                 ])->textarea(['row' => '6
                 ']) ?>
              </div> 
             </div>
           </div>

       </div>
   </div>

   <div class="col-sm-3" style="margin-top: 20px">
       
       <div class="row">
            <?php echo $this->render('_sidebar'); ?>
       </div>

       <div class="row" style="margin-top: 30px">
       <div class="col-sm-12">
           <div class="panel panel-default">
               <div class="panel-heading text-center">
                Welfare Case Number
               </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                           
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
<?php ActiveForm::end() ?>
