<?php
namespace App\Validation;

class CustomRules{

  // Rule is to validate mobile number digits
  public function mobileValidation(string $str, string $fields, array $data){
    
    /*Checking: Number must start from 5-9{Rest Numbers}*/
    if(preg_match( '/^[5-9]{1}[0-9]+/', $data['mobile'])){
      
      /*Checking: Mobile number must be of 10 digits*/
      $bool = preg_match('/^[0-9]{10}+$/', $data['mobile']);
      return $bool == 0 ? false : true; 
      
    }else{
      
      return false;
    }
  }

  public function even(string $str, string &$error = null): bool {
        if ((int) $str % 2 !== 0) {
            $error = lang('myerrors.evenError');

            return false;
        }

        return true;
  }

  public function atLeastTwo($str, string $fields, array $data, string &$error = null): bool
  {
        $numData = count($_POST[$fields]);
        if ($numData <=1 ) {
            //$error = lang('myerrors.numError '.$numData);
            $error = "Minimum atleast 2 Peserta ";

            return false;
        }

        return true;
    }
}