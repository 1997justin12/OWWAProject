<?php
	namespace app\models;
	use yii\db\ActiveRecord;

	class LocalAgency extends ActiveRecord
	{
		const STATUS_INACTIVE = 0;
		const STATUC_ACTIVE  =1;


		public static  function tableName()
		{
			return '{{records_local_agency}}';
		}
	}

?>