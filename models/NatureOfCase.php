<?php
	namespace app\models;
	use yii\db\ActiveRecord;

	class NatureOfCase extends ActiveRecord
	{
		const STATUS_INACTIVE = 0;
		const STATUC_ACTIVE  =1;


		public static  function tableName()
		{
			return '{{nature_of_case}}';
		}
	}

?>