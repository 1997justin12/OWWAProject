<?php

namespace app\models;

use Yii;
use yii\base\Model;


class OwwaForm extends Model 
{
	public $dateFiled,$dateEndorsed,$lastActionDate,$totalAction,$noActionFortheMonth,$caseOfficer,
		$assistanceNeeded,$actionTaken,$status,$locatorNo,$nameOfOFW,$gender,$age,$nameOfEmployer,
		$addressOfEmployer,$contactNumber,$position,$nameOfForeignAgency,$nameOfLocalAgency,
		$jobCategory,$jobSite,$case,$requestingParty,$contactNumberOfRequestor,$addressOfRequestor,
		$province;

	public function rules()
	{
		return [
			[['dateFiled','dateEndorsed','lastActionDate','totalAction','noActionFortheMonth',
			'caseOfficer','assistanceNeeded','actionTaken','status','locatorNo','nameOfOFW','gender','age','nameOfEmployer','addressOfEmployer','contactNumber','position','nameOfForeignAgency','nameOfLocalAgency','jobCategory','jobSite','case','requestingParty','contactNumberOfRequestor','addressOfRequestor','province'], 'required']];
	}

}

