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
		$case = new RecordsCase();
		$filedCases = new RecordsDocument();
		$filedCases = new RecordsEmployer();
		$request = new RecordsRequest();
		$filedCases = new ForeignAgency();
		$filedCases = new LocalAgency();
		$filedCases = new AcquaintanceAbroad();
		$filedCases = new OFW();
		
		$request
		
		if($filedCases->save())
		{
			$id = $filedCases->id;

			foreach ($this->natureOfCase as  $value) {
				$caseRecord = new CaseRecord();
				$caseRecord->nature_of_case_id = $value;
				$caseRecord->filed_case_id = $id;
				$caseRecord->save();
				unset($caseRecord);
			}
		}
	}

	public function getCaseNumber()
	{
		
	}

}

