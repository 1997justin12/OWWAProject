<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\FiledCases;
use app\models\CaseRecord;

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
		$filedCases = new FiledCases();
		

		$filedCases->dateFiled = date('Y-m-d');
		$filedCases->welfareCaseNumber = $this->welfareCaseNumber;
		$filedCases->familyName = $this->familyName;
		$filedCases->givenName = $this->givenName;
		$filedCases->middleName = $this->middleName;
		$filedCases->completeAddress = $this->completeAddress;
		$filedCases->relationshipToOfw = $this->relationshipToOfw;
		$filedCases->contactNumber = $this->contactNumber;
		$filedCases->ofwFamilyName = $this->ofwFamilyName;
		$filedCases->ofwGivenName = $this->ofwGivenName;
		$filedCases->ofwMiddleName = $this->ofwMiddleName;
		$filedCases->ofwOtherName = $this->ofwOtherName;
		$filedCases->ofwContactNumber = $this->ofwContactNumber;
		$filedCases->sex = $this->sex[1];
		$filedCases->roamingNumber = $this->roamingNumber;
		$filedCases->birthdate = $this->birthdate;
		$filedCases->age = $this->age;
		$filedCases->civilStatus = $this->civilStatus[1];
		$filedCases->classification = $this->classification[1];
		$filedCases->natureOfWork = $this->natureOfWork;
		$filedCases->highestEducation = $this->highestEducation;
		$filedCases->destination = $this->destination;
		$filedCases->departureDate = $this->departureDate;
		$filedCases->nameOfEmployer = $this->nameOfEmployer;
		$filedCases->addressOfEmployer = $this->adressOfEmployer;
		$filedCases->contactNumberEmployer = $this->contactNumberEmployer;
		$filedCases->telNumberEmployer = $this->telNumberEmployer;
		$filedCases->foreignAgency = $this->foreignAgency;
		$filedCases->telFoxNumberFore = $this->telFoxNumberFore;
		$filedCases->philippineAgency = $this->philippineAgency;
		$filedCases->philippineAgencyAddress = $this->philippineAgencyAddress;
		$filedCases->telNumberPhil = $this->telNumberPhil;
		$filedCases->telFoxNumberPhil = $this->telFoxNumberPhil;
		$filedCases->contactPersonAgency = $this->contactPersonAgency;
		$filedCases->mobilePhone = $this->mobilePhone;
		$filedCases->acquaintanceAbroad = $this->acquaintanceAbroad;
		$filedCases->acquaintanceContact = $this->acquaintanceContact;
		$filedCases->assistanceSought = $this->assistanceSought;
		

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

