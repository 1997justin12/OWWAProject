<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

class SignupForm extends Model
{

	public $familyName, $firstName, $middleName, $ofwName, $relation, $completeAddress, $contactNumber,
		   $emailAddress, $username, $password;

	public function rules()
	{
		return [
		 [[ 'familyName', 'firstName', 'ofwName', 'middleName', 'relation', 'completeAddress', 'contactNumber', 'emailAddress', 'username', 'password' ], 'required' ]];
	}

	public function createUserAccount()
	{
		$user = new User();
		$user->family_name = $this->familyName;
		$user->first_name = $this->firstName;
		$user->middle_name = $this->middleName;
		$user->ofw_name = $this->ofwName;
		$user->relation = $this->relation;
		$user->complete_address = $this->completeAddress;
		$user->contact_number = $this->contactNumber;
		$user->email_address = $this->emailAddress;
		$user->username = $this->username;
		$user->password = $this->password;
		if($user->save()){
			return  true; 
		}
		return false;
	}
}



?>