<?php
	namespace app\models;
	use yii\db\ActiveRecord;

	class RequestForm extends ActiveRecord
	{
		const STATUS_INACTIVE = 0;
		const STATUC_ACTIVE  =1;


		public function tableName()
		{
			return '{{request_form}}';
		}
	}

?>