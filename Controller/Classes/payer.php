<?php

class Payer extends Database
{
    public $name;
    public $phone;
    public $email;
    public $address;
    public $gender;
    public $amount_of_contribution;

    public $Result;
    public $Rlt;
    public $value;
    public $table = "payer";



    public function payerInfo($condition = "", $field = "*", $column = "")
    {
        return $this->lookUp($this->table, $field, $condition, $column);
    }

    public function getInfoByGender($gender)
    {
        return $this->payerInfo("gender = '$gender'");
    }
 

    public function singlePayerInfo($id)
    {
        $this->Result =  $this->payerInfo("id = '$id'");
        $this->name = $this->Result['name'];
        $this->phone = $this->Result['phone'];
        $this->email = $this->Result['email'];
        $this->address = $this->Result['address'];
        $this->gender = $this->Result['gender'];
        $this->amount_of_contribution = $this->Result['amount_of_contribution'];
    }

    public function countPayerRow($condition)
    {
        return $this->countRows($this->table, "*", $condition);
    }

    public function isExist($condition)
    {
        $rlt = $this->countPayerRow($condition);
        if ($rlt > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function validation()
    {
        if (Fun::checkEmptyInput([$this->name, $this->phone, $this->email, $this->address, $this->amount_of_contribution])) {
            Fun::redirect("../../Views/index.php", "err", "None of this fields must be empty");
            exit;
        }

        if (is_numeric($this->name)) {
            Fun::redirect("../../Views/index.php", "err", "Name must not contain numbers");
            exit;
        }

        if (!is_numeric($this->phone)) {
            Fun::redirect("../../Views/index.php", "err", "Phone number must not contain alphabets ");
            exit;
        }
        Fun::redirect("../../Views/index.php", "succ", "Saved successfully");
    }


    public function processPayer($name, $phone, $email, $address, $gender, $amount_of_contribution)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->gender = $gender;
        $this->amount_of_contribution = $amount_of_contribution;
        $this->validation();
        $this->savePayerInfo();
    }

    public function processGenderInfo($gender)
    {
        $this->getInfoByGender($gender);
    }

    public function savePayerInfo()
    {
        return $this->save($this->table, "name = '$this->name', phone = '$this->phone', email = '$this->email', address = '$this->address', gender = '$this->gender', amount_of_contribution = '$this->amount_of_contribution'");
    }
}
