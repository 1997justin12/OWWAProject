<?php

namespace app\models;

use Yii;
use yii\base\Model;


class OwwaForm extends Model 
{
	public $dateFiled, $welfareCaseNumber, $familyName, $givenName, $middleName, $completeAddress, $relationshipToOfw, $contactNumber, $natureOfCase, $ofwFamilyName, $ofwGivenName, $ofwMiddleName, $ofwOtherName, $ofwContactNumber, $sex, $roamingNumber, $birthdate, $age, $civilStatus, $classification, $natureOfWork, $highestEducation, $destination, $departureDate, $nameOfEmployer, $adressOfEmployer, $contactNumberEmployer, $telNumberEmployer, $foreignAgency, $telFoxNumberFore, $philippineAgency, $philippineAgencyAddress, $telNumberPhil, $telFoxNumberPhil, $contactPersonAgency, $mobilePhone, $acquaintanceAbroad, $acquaintanceContact, $supportingDocument, $assistanceSought, $inTakeInformation; 

	public function rules()
	{
		return [
			[ [ 'dateFiled', 'welfareCaseNumber', 'familyName', 'givenName', 'middleName', 
			'completeAddress', 'relationshipToOfw', 'contactNumber', 'natureOfCase', 'ofwFamilyName', 'ofwGivenName', 'ofwMiddleName', 'ofwOtherName', 'ofwContactNumber', 'sex', 'roamingNumber', 'birthdate', 'age', 'civilStatus', 'classification', 'natureOfWork', 'highestEducation', 'destination','departureDate', 'nameOfEmployer', 'adressOfEmployer', 'contactNumberEmployer', 'telNumberEmployer', 'foreignAgency', 'telFoxNumberFore', 'philippineAgency', 'philippineAgencyAddress', 'telNumberPhil', 'telFoxNumberPhil', 'contactPersonAgency', 'mobilePhone', 'acquaintanceAbroad', 'acquaintanceContact', 'supportingDocument', 'assistanceSought', 'inTakeInformation' ] , 'required' ] ];
	}

	public function createRequest()
	{
		
		$filedCases = new RecordsDocument();
		$filedCases = new RecordsEmployer();
		$request = new RecordsRequest();
		$filedCases = new ForeignAgency();
		$filedCases = new LocalAgency();
		$filedCases = new AcquaintanceAbroad();
		$filedCases = new OFW();
		
		$request->user_id = Yii::$app->user->id;
		$request->date = $this->dateFiled;
		var_dump($this->familyName);
		
		// if($request->save())
		// {
		// 	$wcNumber = $request->wcNumber;
		// 	foreach ($this->natureOfCase as  $value) {
		// 		$case = new RecordsCase();
		// 		$case->case_detail = $value;
		// 		$case->wcNumber = $wcNumber;
		// 		$case->save();
		// 		unset($caseRecord);
		// 	}
		// }
	}

	public function getCaseNumber()
	{
		
	}

}

